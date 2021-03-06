<?php

namespace App\Http\Controllers;

use App\Customer;
use App\CustomerAddress;
use App\CustomerNotification;
use App\Library\SslCommerz\SslCommerzNotification;
use App\Order;
use App\OrderItem;
use App\OrderPayment;
use App\OrderStatus;
use App\Otp;
use App\ProductReview;
use Carbon\Carbon;
use Exception;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\ImageManagerStatic as Image;

class CustomerController extends Controller
{

    public function profile()
    {

        $result = Customer::leftjoin('customer_addresses', 'customer_addresses.customer_id', '=', 'customers.customer_id')
            ->where('customers.customer_id', Auth::guard('is_customer')->user()->customer_id)
            ->select('customers.*', 'customer_addresses.division_id',
                'customer_addresses.district_id', 'customer_addresses.upazila_id',
                'customer_addresses.customer_address',)
            ->first();

        return view('common.customer.profile')->with('result', $result);
    }

    public function forgetPassword()
    {
        return view('common.customer.password_recovery');
    }

    public function resetPassword(Request $request)
    {

        //return $request->all();

        $validator = Validator::make($request->all(), [
            "customer_phone" => 'required',
            "new_password" => 'required'
        ]);

        if ($validator->fails()) {
            return back()->with('failed', "Validation failed");
        }
        if ($request['confirm_password'] != $request['new_password']) {
            return back()->with('failed', "Password And Confirm Password Not Matched");
        }

        //Check phoen number is exist

        unset($request['confirm_password']);

        //OTP Verify
        $is_exist = Otp::where('phone_number', $request['customer_phone'])->where('otp', $request['otp'])->first();
        if (!is_null($is_exist)) {
            if (Carbon::parse($is_exist->created_at)
                    ->addSeconds(getExpireLimit()) < \Carbon\Carbon::now()) {
                $status_code = 400;
                $message = "OTP Expired";
                return back()->with('failed', $message);
            }
        } else {
            $status_code = 400;
            $message = "Invalid OTP";
            return back()->with('failed', $message);
        }

        try {

            Otp::where('phone_number', $request['phone_number'])->update([
                'is_used' => true
            ]);

            $customer_array = [
                "customer_password" => Hash::make($request['new_password'])
            ];
            Customer::where('customer_phone', $request['customer_phone'])->update($customer_array);

            $message = "Password changed Successfully, Login with your new password";
            $status_code = 200;
            $credentiatls = [
                'customer_phone' => $request['customer_phone'],
                'password' => Hash::make($request['new_password'])
            ];

            //Auth::guard('is_customer')->attempt($credentiatls);

            return \redirect()->to("/customer/sign-in")->with('success', $message);
            //return back()->with('success', $message);

        } catch (Exception $exception) {
            $message = $exception->getMessage();
            $status_code = 400;

            return back()->with('failed', $message);
        }

    }

    public function profileUpdate(Request $request)
    {
        if ($request->hasFile('customer_image')) {
            $image = $request->file('customer_image');
            $image_name = time() . '.' . $image->getClientOriginalExtension();
            $image_resize = Image::make($image->getRealPath());
            $image_resize->resize(300, 300);
            $image_resize->save(public_path('/images/customer/' . $image_name));
            $request['image'] = '/images/customer/' . $image_name;

        }
        try {

            Customer::where('customer_id', $request['customer_id'])->update($request->except(['_token', 'customer_image']));
            return back()->with('success', "Successfully Customer profile updated");

        } catch (Exception $exception) {
            return back()->with('failed', $exception->getMessage());
        }
    }

    public function passwordUpdate(Request $request)
    {


        $request->validate([
            'new_password' => 'required',
            'new_confirm_password' => 'required|same:new_password'

        ]);

        try {
            Customer::find(Auth::guard('is_customer')->user()->customer_id)->update(['customer_password' => Hash::make($request->new_password)]);
            return back()->with('success', "Successfully Customer profile updated");
        } catch (Exception $exception) {
            return back()->with('failed', $exception->getMessage());
        }

    }

    public function addressUpdate(Request $request)
    {
        // return $request->all();
        unset($request['_token']);

        $customer = CustomerAddress::where('customer_id', $request['customer_id'])->first();
        if (is_null($customer)) {
            CustomerAddress::create($request->all());
            return back()->with('success', "Successfully Customer profile updated");

        } else
            try {
                CustomerAddress::find(Auth::guard('is_customer')->user()->customer_id)->update($request->all());
                return back()->with('success', "Successfully Customer profile updated");
            } catch (Exception $exception) {
                return back()->with('failed', $exception->getMessage());
            }

    }

    public function orderHistory()
    {
        if (!Auth::guard('is_customer')->check()) {
            return Redirect::to("/customer/sign-in");
        }

        $customer_id = Auth::guard('is_customer')->user()->customer_id;

        $order = Order::where('customer_id', $customer_id)->get();

        return view('common.customer.orders')->with('order_items', $order);
    }

    public function orderDetails($order_invoice)
    {
        if (!Auth::guard('is_customer')->check()) {
            return Redirect::to("/customer/sign-in");
        }

        $customer_id = Auth::guard('is_customer')->user()->customer_id;

        $order = Order::where('customer_id', $customer_id)->where('order_invoice', $order_invoice)->first();
        if (is_null($order)) {
            return \redirect()->to("/failed")->with('failed', "Invoice number is invalid");
        }
        $order_items = OrderItem::where('order_invoice', $order_invoice)
            ->join('products', 'products.product_id', '=', 'order_items.product_id')
            ->select("products.product_name", 'products.shop_id as shop', 'order_items.*')
            ->get();
        return view('common.customer.order_details')->with('order_items', $order_items);
    }


    public function login()
    {
        $previous_page = url()->previous();

        //return Auth::guard('is_customer')->check();
        if (Auth::guard('is_customer')->check()) {
            return Redirect::to("/");
        }

        return view('common.customer.login')->with('callback_page', $previous_page);
    }

    public function passwordRecovery()
    {
        $previous_page = url()->previous();

        //return Auth::guard('is_customer')->check();
        if (Auth::guard('is_customer')->check()) {
            return Redirect::to("/");
        }

        return view('common.customer.password_recovery')->with('callback_page', $previous_page);
    }


    public function loginCheck(Request $request)
    {

        $credentials = [
            'customer_phone' => $request['phone'],
            'password' => $request['password'],
        ];


        if (str_contains($request['last_page'], '/forget-password')) {
            $request['last_page'] = URL::to('/');
        }

        if (Auth::guard('is_customer')->attempt($credentials)) {

            /*if (Auth::guard('is_customer')->check()) {
                return redirect("/lol");
            }*/

            return redirect($request['last_page']);
        }
        // Customer::
        return back()->with('failed', 'Phone Or Password is not Valid');

    }

    public function create()
    {
        return view('admin.customer.create');

    }


    public function store(Request $request)
    {
        //return $request->all();
        try {

            Customer::create($request->except(['_token']));
            return back()->with('success', "Successfully Customer added");

        } catch (Exception $exception) {
            return back()->with('failed', $exception->getMessage());
        }
    }


    public function show(Customer $customer)
    {

        return view('admin.customer.show')
            ->with('results', Customer::OrderBy('created_at', 'DESC')->get());
    }

    public function edit($id)
    {
        return view('admin.customer.edit')
            ->with('result', Customer::where('customer_id', $id)->first());
    }

    public function update(Request $request, Customer $customer)
    {

        if ($request['customer_password'] == null) {
            unset($request['customer_password']);
        }

        //return $request->all();
        try {

            Customer::where('customer_id', $request['customer_id'])->update($request->except(['_token']));
            return back()->with('success', "Successfully Customer updated");

        } catch (Exception $exception) {
            return back()->with('failed', $exception->getMessage());
        }
    }


    public function destroy($id)
    {
        try {

            Customer::where('customer_id', $id)->delete();
            return back()->with('success', "Successfully Customer Deleted");

        } catch (Exception $exception) {
            return back()->with('failed', $exception->getMessage());
        }


    }


    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "customer_name" => 'required',
            "customer_phone" => 'required|unique:customers',
            "customer_password" => 'required'
        ]);

        if ($validator->fails()) {
            return getApiErrorResponse(400, "Validation failed", $request->all());
        }

        //OTP Verify
        $is_exist = Otp::where('phone_number', $request['customer_phone'])->where('otp', $request['otp'])->first();
        if (!is_null($is_exist)) {
            if (Carbon::parse($is_exist->created_at)
                    ->addSeconds(getExpireLimit()) < \Carbon\Carbon::now()) {
                $status_code = 400;
                $message = "OTP Expired";
                return getApiErrorResponse($status_code, $message, $request->all());
            }
        } else {
            $status_code = 400;
            $message = "Invalid OTP";
            return getApiErrorResponse($status_code, $message, $request->all());
        }

        try {

            Otp::where('phone_number', $request['phone_number'])->update([
                'is_used' => true
            ]);

            $customer_array = [
                "customer_name" => $request['customer_name'],
                "customer_phone" => $request['customer_phone'],
                "customer_password" => Hash::make($request['customer_password'])
            ];
            Customer::create($customer_array);

            //Session set
            $credentials = [
                'customer_phone' => $request['customer_phone'],
                'password' => $request['customer_password'],
            ];
            if (Auth::guard('is_customer')->attempt($credentials)) {
                //return redirect($request['last_page']);
            }

            $message = "Successfully Registered, Keep shopping with us";
            $status_code = 200;

        } catch (Exception $exception) {
            $message = $exception->getMessage();
            $status_code = 400;
        }
        return getApiErrorResponse($status_code, $message, $request->all());

    }


    public function logout()
    {

        Auth::guard('is_customer')->logout();
        return Redirect::to('/');
    }

    public function orderSuccess()
    {
        return view('common.order.success')->with("message", Session::get('message'));
    }

    public function orderFailed(Request $request)
    {
        return view('common.order.failed')->with("message", Session::get('message'));
    }

    public function orderSave(Request $request)
    {


        //return $request->all();
        $order_invoice = getInvoice();

        $is_customer_exist = Customer::where('customer_phone', $request['customer_phone'])->first();
        if (is_null($is_customer_exist)) {
            $customer_id = Customer::insertGetId([
                'customer_name' => $request['customer_name'],
                'customer_phone' => $request['customer_phone'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        } else {
            $customer_id = $is_customer_exist->customer_id;
        }
        $address = [
            'customer_id' => $customer_id,
            'customer_address_type' => "Home",
            'customer_address' => $request['address'],
        ];

        //Insert into Address
        try {
            $address_id = CustomerAddress::insertGetId($address);

        } catch (Exception $exception) {
            return $exception->getMessage();
        }


        $total_delivery_charge = 0;
        $total_price = 0;
        $coupon = 0;
        $coupon_code = "";
        $order_array = [];
        $shop_array = [];
        $status_array = [];
        $voucher_array = [];
        //return Cart::content();
        foreach (Cart::content() as $item) {

            $total_price = $total_price + ($item->price * $item->qty);
            $total_delivery_charge = getTotalDeliveryCharge();
            $order_array = [
                'product_id' => $item->id,
                'selling_price' => $item->price,
                'quantity' => $item->qty,
                'order_invoice' => $order_invoice,
                'total_price' => $item->price * $item->qty,
                'size' => $item->options->size,
                'color' => $item->options->color,
                'shop_id' => $item->options->shop_id,
                'commission_rate' => getCommissionRate($item->options->shop_id),
                'delivery_charge' => (double)$item->options->delivery_charge,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ];
            try {
                $order_item_id = OrderItem::insertGetId($order_array);
            } catch (Exception $exception) {
                return $exception->getMessage();
            }
            $status_array = [
                'order_item_id' => $order_item_id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ];
            try {
                OrderStatus::create($status_array);
            } catch (\Exception $exception) {
                return $exception->getMessage();
            }
        }
        $order_data = [
            'order_invoice' => $order_invoice,
            'total' => $total_price,
            'shipping_cost' => $total_delivery_charge,
            'sub_total' => $total_price + $total_delivery_charge - $coupon,
            'coupon' => $coupon,
            'coupon_code' => $coupon_code,
            'discount' => $coupon,
            'paid_amount' => 0,
            'customer_id' => $customer_id,
            'comment' => $request['message'],
            'delivery_address_id' => $address_id,
            'is_whole_sale' => 0,

            'payment_type' => "Cash",
            'payment_status' => 0,
            'shops' => "",
            'vouchers' => "",
        ];
        //Insert into Payment table
        try {
            Order::create($order_data);
        } catch (Exception $exception) {
            return $exception->getMessage();
        }

        return Redirect::to("/customer/order-success");
    }

    private function startPayment($amount, $transaction_id)
    {

        $post_data = array();
        $post_data['total_amount'] = $amount; # You cant not pay less than 10
        $post_data['currency'] = "BDT";
        $post_data['tran_id'] = $transaction_id;

        # CUSTOMER INFORMATION
        $post_data['cus_name'] = Auth::guard('is_customer')->user()->customer_name;
        $post_data['cus_email'] = "memotiur@gmail.com";
        $post_data['cus_add1'] = 'Customer Address';
        $post_data['cus_add2'] = "";
        $post_data['cus_city'] = "";
        $post_data['cus_state'] = "";
        $post_data['cus_postcode'] = "";
        $post_data['cus_country'] = "Bangladesh";
        $post_data['cus_phone'] = Auth::guard('is_customer')->user()->customer_phone;
        $post_data['cus_fax'] = "";

        # SHIPMENT INFORMATION
        $post_data['ship_name'] = "Mart venue";
        $post_data['ship_add1'] = "Dhaka";
        $post_data['ship_add2'] = "Dhaka";
        $post_data['ship_city'] = "Dhaka";
        $post_data['ship_state'] = "Dhaka";
        $post_data['ship_postcode'] = "1000";
        $post_data['ship_phone'] = "";
        $post_data['ship_country'] = "Bangladesh";

        $post_data['shipping_method'] = "NO";
        $post_data['product_name'] = "Computer";
        $post_data['product_category'] = "Goods";
        $post_data['product_profile'] = "physical-goods";

        # OPTIONAL PARAMETERS
        $post_data['value_a'] = $transaction_id;
        $post_data['value_b'] = "ref002";
        $post_data['value_c'] = "ref003";
        $post_data['value_d'] = "ref004";


        #Before  going to initiate the payment order status need to insert or update as Pending.
        /*$update_product = DB::table('orders')
            ->where('transaction_id', $post_data['tran_id'])
            ->updateOrInsert([
                'name' => $post_data['cus_name'],
                'email' => $post_data['cus_email'],
                'phone' => $post_data['cus_phone'],
                'amount' => $post_data['total_amount'],
                'status' => 'Pending',
                'address' => $post_data['cus_add1'],
                'transaction_id' => $post_data['tran_id'],
                'currency' => $post_data['currency']
            ]);
*/

        // return $post_data;

        $sslc = new SslCommerzNotification();
        # initiate(Transaction Data , false: Redirect to SSLCOMMERZ gateway/ true: Show all the Payement gateway here )
        $payment_options = $sslc->makePayment($post_data, 'hosted');

        if (!is_array($payment_options)) {
            print_r($payment_options);
            $payment_options = array();
        }
    }

    public function success(Request $request)
    {
        Cart::destroy();
        Session::forget("promo");
        // return $request->all();

        $tran_id = $request->input('tran_id');
        $amount = $request->input('amount');
        $currency = $request->input('currency');

        $sslc = new SslCommerzNotification();

        $order_detials = Order::where('order_invoice', $request['tran_id'])
            ->select('order_invoice', 'payment_status', 'paid_amount')->first();


        if ($order_detials->payment_status == 0) {
            $validation = $sslc->orderValidate($tran_id, $amount, $currency, $request->all());

            if ($validation == TRUE) {
                /*
                That means IPN did not work or IPN URL was not set in your merchant panel. Here you need to update order status
                in order table as Processing or Complete.
                Here you can also sent sms or email for successfull transaction to customer
                */

                try {
                    Order::where('order_invoice', $request['tran_id'])->update([
                        'payment_status' => true]);
                    OrderPayment::create([
                        'tran_id' => $request['tran_id'],
                        'amount' => $request['amount'],
                        'is_online_payment' => true
                    ]);

                    return Redirect::to('/customer/order-success')->with('message', "Successfully Order Placed");

                } catch (Exception $exception) {

                    return $message = $exception->getMessage();
                }


            } else {

                Order::where('order_invoice', $request['tran_id'])->update([
                    'payment_status' => 2]);

                return Redirect::to('/customer/order-failed')->with('message', "Payment Rejected");
            }

            $message = "Dear " . Auth::guard('is_customer')->user()->customer_name . ", Thanks for placing your order " . $order_invoice . ". Your order is now processing.";
        } else if ($order_detials->payment_status == 1) {
            return Redirect::to('/customer/order-success')->with('message', "Transaction is successfully Completed");
        } else {
            return Redirect::to('/customer/order-failed')->with('message', "Invalid Transaction");

        }
    }


    public function fail(Request $request)
    {

        $order_detials = Order::where('order_invoice', $request['tran_id'])
            ->select('order_invoice', 'payment_status', 'paid_amount')->first();

        if ($order_detials->payment_status == 0) {
            Order::where('order_invoice', $request['tran_id'])->update([
                'payment_status' => 2]);
            return Redirect::to('/customer/order-failed')->with('message', "Transaction is Falied");

        } else if ($order_detials->payment_status == 1) {
            return Redirect::to('/customer/order-success')->with('message', "Transaction is successfully Completed");
        } else {
            return Redirect::to('/customer/order-failed')->with('message', "Invalid Transaction");

        }

    }

    public function cancel(Request $request)
    {
        $order_detials = Order::where('order_invoice', $request['tran_id'])
            ->select('order_invoice', 'payment_status', 'paid_amount')->first();

        if ($order_detials->payment_status == 0) {
            Order::where('order_invoice', $request['tran_id'])->update([
                'payment_status' => 2]);
            return Redirect::to('/customer/order-failed')->with('message', "Transaction is Falied");

        } else if ($order_detials->payment_status == 1) {
            return Redirect::to('/customer/order-success')->with('message', "Transaction is successfully Completed");
        } else {
            return Redirect::to('/customer/order-failed')->with('message', "Invalid Transaction");

        }
    }

    public function reviewStore(Request $request)
    {

        try {
            ProductReview::create([
                'product_id' => $request['product_id'],
                'comment' => $request['comment'],
                'is_whole_sale' => $request['is_whole_sale'],
                'score' => $request['score'],
                'customer_id' => Auth::guard('is_customer')->user()->customer_id
            ]);

            return back()->with('success', "Successfully Review Posted");
        } catch (\Exception $exception) {
            return $exception->getMessage();
            return back()->with('success', "There is an error");
        }
    }

    public function notification()
    {
        if (!Auth::guard('is_customer')->check()) {
            return Redirect::to("/customer/sign-in");
        }
        $result = CustomerNotification::where('customer_id', Auth::guard('is_customer')->user()->customer_id)
            ->orderBy('created_at', "DESC")->get();
        return view('common.customer.notification')->with('result', $result);
    }
}
