<?php

namespace App\Http\Controllers;

use App\Customer;
use App\CustomerAddress;
use App\Order;
use App\OrderItem;
use App\Product;
use App\ProductCategory;
use App\ProductImage;
use App\ProductReview;
use App\PromotionalSlider;
use App\ReviewReply;
use App\Shop;
use App\Slider;
use App\SubCategory;
use App\User;
use App\WholeSale;
use App\WholeSaleCategory;
use App\WholeSalePriceRange;
use App\WholeSaleProductImage;
use App\WholesSaleSubCategory;
use Carbon\Carbon;
use Exception;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function home()
    {
        //return \App\Shop::get();
        $featured_item = Product::orderBy('products.product_id', 'DESC')
            ->where('is_featured', true)
            ->where('products.is_active', true)
            ->limit(6)
            ->get();


        $gadgets = Product::orderBy('products.product_id', 'DESC')
            /*  ->whereIn('parent_category_id', getCategoryIdFromName(1, "gadget"))*/
            ->where('products.is_active', true)
            ->limit(8)
            ->get();


        $fashions = Product::orderBy('products.product_id', 'DESC')
            /*  ->whereIn('parent_category_id', getCategoryIdFromName(1, "men"))*/
            ->where('products.is_active', true)
            ->limit(8)
            ->get();

        $occasional_title = "Winter Collection";
        $occasional_collections = Product::orderBy('products.product_id', 'DESC')
            /* ->where('category_id', getCategoryIdFromName())*/
            ->where('products.is_active', true)
            ->limit(8)
            ->get();

        $occasional_collections->title = $occasional_title;

        $whole_sale_item = WholeSale::where('is_featured', true)->where('is_active', true)->orderBy('created_at', 'DESC')->get();
        foreach ($whole_sale_item as $res) {
            $res->price = getWholeSaleStartFromPrice($res->whole_sales_product_id);
        }

        $new_products = Product::orderBy('products.product_id', 'DESC')->where('products.is_active', true)->limit(24)->get();

        $popular_categories = SubCategory::orderBy('created_at', 'DESC')->limit(16)->get();
        $promotions = PromotionalSlider::limit(2)->orderBy('created_at', 'DESC')->get();
        $sliders = Slider::orderBy('created_at', 'DESC')->orderBy('created_at', 'DESC')->get();
        $section_one_promotions = PromotionalSlider::where('section_id', 1)->orderBy('created_at', 'DESC')->get();
        $full_banner = PromotionalSlider::where('section_id', 2)->orderBy('created_at', 'DESC')->first();
        $half_banner = PromotionalSlider::where('section_id', 3)->limit(2)->orderBy('created_at', 'DESC')->get();


        //Category Format start
        $popular_category1 = [];
        $popular_category2 = [];
        $i = 1;
        if (count($popular_categories) <= 8) {
            foreach ($popular_categories as $item) {
                if ($i <= 4) {
                    $popular_category1[] = $item;
                } else {
                    $popular_category2[] = $item;
                }
                $i++;
            }
        } else {
            foreach ($popular_categories as $item) {
                if ($i <= 8) {
                    $popular_category1[] = $item;
                } else {
                    $popular_category2[] = $item;
                }
                $i++;
            }
        }
        //Category Format End

        return view('common.home.index')
            ->with('featured_products', $featured_item)
            ->with('whole_sale_item', $whole_sale_item)
            ->with('gadgets', $gadgets)
            ->with('fashions', $fashions)
            ->with('new_products', $new_products)
            ->with('occasional_collections', $occasional_collections)
            ->with('promotions', $promotions)
            ->with('popular_categories', $popular_categories)
            ->with('popular_category1', $popular_category1)
            ->with('popular_category2', $popular_category2)
            ->with('slider', $sliders)
            ->with('section_one_promotions', $section_one_promotions)
            ->with('full_banner', $full_banner)
            ->with('half_banner', $half_banner);

    }

    public function featuredProduct()
    {
        $result = Product::orderBy('products.product_id', 'DESC')
            ->where('is_featured', true)
            ->where('products.is_active', true)
            ->get();
        return view('common.view_all.index')->with('result', $result);
    }
    public function returnPolicy()
    {
        return view('common.return_policy.index');
    }

    public function allWholesale()
    {
        $result = WholeSale::where('is_active', true)->orderBy('created_at', 'DESC')->limit(50)->get();
        foreach ($result as $res) {
            $res->price = getWholeSaleStartFromPrice($res->whole_sales_product_id);
        }
        return view('common.view_all.wholesale_all')->with('result', $result);
    }

    public function gadget()
    {
        $result = Product::orderBy('products.product_id', 'DESC')
            ->whereIn('parent_category_id', getCategoryIdFromName(1, "gadget"))
            ->where('products.is_active', true)
            ->get();
        return view('common.view_all.index')->with('result', $result);
    }

    public function fashionProduct()
    {
        $result = Product::orderBy('products.product_id', 'DESC')
            ->whereIn('parent_category_id', getCategoryIdFromName(1, "men"))
            ->where('products.is_active', true)
            ->get();
        return view('common.view_all.index')->with('result', $result);
    }

    public function recentProducts()
    {
        $result = Product::orderBy('products.product_id', 'DESC')
            ->where('products.is_active', true)
            ->limit(50)
            ->get();
        return view('common.view_all.index')->with('result', $result);
    }


    public function details($id, $name)
    {

        $new_products = Product::join('shops', 'shops.shop_id', '=', 'products.shop_id')->orderBy('product_id', 'DESC')->where('products.is_active', true)->get();
        $product = Product::leftjoin('product_categories', 'product_categories.category_id', '=', 'products.category_id')
            ->leftjoin('shops', 'shops.shop_id', '=', 'products.shop_id')
            ->where('product_id', $id)
            ->where('products.is_active', true)
            ->first();
        if (is_null($product)) {
            return \redirect("/failed")->with('failed', "Content Not Found");
        }

        $reviews = ProductReview::where('product_id', $id)
            ->join('customers', 'customers.customer_id', '=', 'product_reviews.customer_id')
            ->where('is_whole_sale', false)
            ->orderBy('product_reviews.created_at', 'DESC')
            ->select('product_reviews.*', 'customers.customer_name')
            ->get();
        foreach ($reviews as $review) {
            $review->review_reply = ReviewReply::where('review_id', $review->review_id)->get();
        }

        $product->reviews = $reviews;
        $product->rating = 5;
        //return $product;

        if (is_null($product)) {
            return "Product Not Found";//TODO::
        }

        $images = ProductImage::where('product_id', $id)->get();

        //return $product;
        return view('common.product.details')
            ->with('product', $product)
            ->with('images', $images)
            ->with('new_products', $new_products);
    }

    public function about()
    {
        return view('common.about.index');
    }

    public function error()
    {
        return view('common.error.index')->with('message', Session::get('message'));
    }

    public function delivery()
    {
        return view('common.footer_pages.delivery');
    }

    public function shops()
    {
        return view('common.footer_pages.shops');
    }

    public function securePayment()
    {
        return view('common.footer_pages.secure_payment');
    }


    public function shopProducts($id, $name)
    {
        $shops = Shop::get();
        $new_products = Product::join('shops', 'shops.shop_id', '=', 'products.shop_id')->orderBy('product_id', 'DESC')
            ->where('products.shop_id', $id)
            ->where('products.is_active', true)->get();

        $my_shop = Shop::where('shop_id', $id)->first();

        return view('common.shop.index')
            ->with('shops', $shops)
            ->with('my_shop', $my_shop)
            ->with('shop_id', $id)
            ->with('products', $new_products);
    }

    public function cart()
    {
        Session::remove('promo');
        return view('common.cart.index');
    }

    public function contact()
    {

        return view('common.contact.index');
    }


    public function checkout()
    {

        //return  Session::get('promo');

        if (!Auth::guard('is_customer')->check()) {
            //Redirect::to('/')->with('/customer/sign-in');
            return Redirect::to('/customer/sign-in');
        }

        $address = CustomerAddress::where('customer_id', Auth::guard('is_customer')->user()->customer_id)->first();
        return view('common.checkout.index')->with('customer_address', $address);
    }

    public function order($invoice)
    {

        //return $request->all();
        return view('common.order.index')->with('invoice', $invoice);
    }

    public function placeOrder(Request $request)
    {

        $payment_track_id = time() . rand(1, 9);

        if ($request['shipping_address_phone'] == null) {
            $request['shipping_address_phone'] = $request['customer_phone'];
        }
        if ($request['shipping_address_name'] == null) {
            $request['shipping_address_name'] = $request['customer_name'];
        }

        try {
            $billing_array = [
                'shipping_address_name' => $request['shipping_address_name'],
                'shipping_address_address' => $request['shipping_address_address'],
                'shipping_address_phone' => $request['shipping_address_phone'],
                'payment_track_id' => $payment_track_id,
                'union_id' => $request['union_id'],
                'upazila_id' => $request['upazila_id'],
                'district_id' => $request['district_id'],
                'division_id' => $request['division_id']
            ];
            ShippingAddress::create($billing_array);

        } catch (Exception $exception) {
            $message = $exception->getMessage();
            return response()->json([
                'status' => 'failed',
                'message' => 'There was a problem' . $exception->getMessage(),
            ], 200);
        }


        /*  customer_name: $scope.customer_name,
                  customer_phone: $scope.customer_phone,
                  customer_email: $scope.customer_email,
                  customer_address: $scope.customer_address,
                  git add .
        */


        $flag = false;
        if ($request['customer_name'] == null || $request['customer_name'] == "") {
            $flag = true;
        }
        if ($request['customer_phone'] == null || $request['customer_phone'] == "") {
            $flag = true;
        }

        if ($request['shipping_address_name'] == null || $request['shipping_address_name'] == "") {
            $flag = true;
        }

        if ($request['is_full_payment'] == 1) {
            $booking_money = 0;
        } else {

            /* foreach ($request['items'] as $item) {

                 $booking_money = Product::where('product_id', $item['id'])->fisrt()->selling_price;
                 $booking_money = $booking_money * 0.1;
             }*/


        }
        if ($flag) {
            return response()->json([
                'status' => 'failed',
                'message' => 'There was a problem'
            ]);
        } else {
            $customer_array = array(
                'customer_name' => $request['customer_name'],
                'customer_phone' => $request['customer_phone'],
                'customer_email' => $request['customer_email'],
                'customer_address' => $request['shipping_address_name'],
                'union_id' => $request['union_id'],
                'upazila_id' => $request['upazila_id'],
                'district_id' => $request['district_id'],
                'division_id' => $request['division_id']
            );

            $is_exist = Customer::where('customer_phone', $request['customer_phone'])->first();
            if (is_null($is_exist)) {
                $user_id = Customer::insertGetId($customer_array);
            } else {
                $user_id = $is_exist->customer_id;
            }

            $shipping_cost = $request['shipping_cost'];
            $total_price = $request['total_price'];


            try {


                foreach ($request['items'] as $item) {

                    //Need to fix TODO:
                    $product = Product::where('product_id', $item['id'])->first();
                    $invoice = $product->product_id . time() . rand(1, 9);
                    if ($request['is_full_payment']) {
                        $paid_amount = $product->selling_price + $request['processing_cost'] + $shipping_cost;
                    } else {
                        $paid_amount = $product->selling_price * getBookingMOney() + $request['processing_cost'] + $shipping_cost;
                    }

                    $sell_array = array(
                        'order_invoice' => $invoice,
                        'sub_total' => $request['grand_total'],
                        'paid_amount' => $paid_amount,
                        'shipping_cost' => $shipping_cost,
                        'processing_cost' => $request['processing_cost'],
                        'is_full_payment' => $request['is_full_payment'],
                        'customer_id' => $user_id,
                        'booking_money' => $booking_money,
                        'expected_delivery_date' => $request['delivery_date'],
                        'cow_delivery_type' => $request['delivery_type'],
                        'is_inside_dhaka' => $request['is_inside_dhaka'],
                        'delivery_type' => $request['delivery_type'],
                        'shop_id' => $product->shop_id,
                        'payment_track_id' => $payment_track_id,
                        'created_at' => Carbon::now(),
                        'updated_at' => Carbon::now(),
                    );

                    Order::create($sell_array);

                    $product_array = array(
                        'product_id' => $item['id'],
                        'selling_price' => $item['price'],
                        'quantity' => $item['qnt'],
                        'total_price' => $item['qnt'] * $item['price'],
                        'order_invoice' => $invoice,
                    );

                    OrderItem::create($product_array);
                }


                Session::put('invoice', $invoice);
                Session::put('payment_track_id', $payment_track_id);
                Session::put('total_payable', $request['grand_total']);
                Session::put('customer_phone', $request['customer_phone']);


                //$this->sendSms($request['customer_name'], $request['customer_phone'],$invoice);
                return response()->json([
                    'status' => 'success',
                    'invoice' => $invoice,
                    'message' => 'Successfully Saved',
                ], 200);
            } catch (Exception $exception) {
                return response()->json([
                    'status' => 'failed',
                    'message' => 'There was a problem' . $exception->getMessage(),
                ], 200);
            }

        }

    }

    public function callbackResponse(Request $request)
    {

        //return view('common.order.index')->with('invoice', $invoice);
    }

    public function paymentSuccess(Request $request)
    {
        //return $request->all();
        return view('common.payment.success');
    }

    public function shopRegistration(Request $request)
    {
        return view('common.registration.create');
    }


    public function otpVerify(Request $request)
    {
        if ($request->method() == "POST") {
            //return $request->all();

            $is_exist = User::where('phone', Session::get('phone'))->where('otp', $request['otp'])->first();
            if (is_null($is_exist)) {

                return back()->with('failed', 'There is an error');
            } else {
                return Redirect::to('/admin/login')->with('success', "Your account is verified. Login to continue");
            }

        }
        return view('common.registration.otp');

    }

    //products

    public function parentCategoryProduct($id)
    {
        $category = ProductCategory::where('category_id', $id)->first();
        return view('common.category.index')
            ->with('category', $category)
            ->with('category_type', 1)
            ->with('category_id', $category->parent_category_id)
            ->with('query', 1)
            ->with('offer', 0);
    }


    public function categoryProduct($id)
    {
        $category = ProductCategory::where('category_id', $id)->first();
        return view('common.category.index')
            ->with('category', $category)
            ->with('category_type', 2)
            ->with('category_id', $category->category_id)
            ->with('query', 1)
            ->with('offer', 0);
    }

    public function subCategoryProduct($id)
    {
        $sub_category = SubCategory::where('sub_category_id', $id)->first();
        return view('common.category.index')
            ->with('category', $sub_category)
            ->with('category_type', 3)
            ->with('category_id', $sub_category->sub_category_id)
            ->with('query', 1)
            ->with('offer', 0);
    }


    public function offer()
    {
        return view('common.category.index')
            ->with('category', [])
            ->with('category_type', 0)
            ->with('category_id', 0)
            ->with('query', 1)
            ->with('offer', 1);

    }


    //Whole sale

    public function wholeSale()
    {
        $category = [];
        return view('common.whole_sale.index')
            ->with('category', $category)
            ->with('category_type', 0)
            ->with('category_id', 0)
            ->with('query', 1);
    }


    public function wholeSaleCategoryProduct($id, $name)
    {
        $category = WholeSaleCategory::where('whole_sale_category_id', $id)->first();
        return view('common.whole_sale.index')
            ->with('category', $category)
            ->with('category_type', 1)
            ->with('category_id', $category->whole_sale_category_id)
            ->with('query', 1);
    }

    public function wholeSaleSubCategoryProduct($id, $name)
    {
        $category = WholesSaleSubCategory::where('whole_sale_sub_category_id', $id)->first();
        return view('common.whole_sale.index')
            ->with('category', $category)
            ->with('category_type', 2)
            ->with('category_id', $category->whole_sale_sub_category_id)
            ->with('query', 1);
    }


    public function search(Request $request)
    {


        if ($request['type'] == "retail") {

            return view('common.category.index')
                ->with('category', [])
                ->with('category_type', 0)
                ->with('category_id', 0)
                ->with('query', $request['query'])
                ->with('offer', 1);
        } else {
            return view('common.whole_sale.index')
                ->with('category', [])
                ->with('category_type', 0)
                ->with('category_id', 0)
                ->with('query', $request['query']);
        }
    }

    public function wholeSaleProductDetails($id, $name)
    {
        $product = WholeSale::where('whole_sales_product_id', $id)->where('is_active', true)
            ->first();
        if (is_null($product)) {
            return Redirect::to("/failed")->with("failed", "Product Not found");
        }
        $product->prices = WholeSalePriceRange::where('whole_sales_product_id', $id)->get();
        $product->images = WholeSaleProductImage::where('product_id', $id)->get();

        //return $product;
        $similar_products = WholeSale::where('is_active', true)->get();
        foreach ($similar_products as $res) {
            $res->price = getWholeSaleStartFromPrice($res->whole_sales_product_id);
        }

        //return $product;
        return view('common.whole_sale.details.index')
            ->with('product', $product)
            ->with('similar_products', $similar_products);
    }

    public function privacy_policy()
    {
        return view('common.privacy_policy.index');

    }

    public function failed()
    {
        return view('common.404');

    }

}
