<?php

use App\Order;
use App\User;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

/*Admin Area Started Here*/
Route::group(['middleware' => 'admin'], function () {

    Route::get('/admin/dashboard', 'DashboardController@dashboard');
    Route::get('/admin/report/show', 'DashboardController@report');
    Route::get('/admin/shop-report/show/{id}', 'DashboardController@ShopReport');
    Route::get('/admin/profile', 'DashboardController@profile');
    Route::get('/admin/product/create', 'ProductController@create');
    Route::post('/admin/product/store', 'ProductController@store');
    Route::get('/admin/product/show', 'ProductController@show');
    Route::get('/admin/product/edit/{id}', 'ProductController@edit');
    Route::post('/admin/product/update', 'ProductController@update');
    Route::get('/admin/product/delete/{id}', 'ProductController@destroy');
    Route::get('/admin/product/details/{id}', 'ProductController@productDetails');
    Route::get('/admin/product/featured/{id}', 'ProductController@featured');
    Route::get('/admin/product/unfeatured/{id}', 'ProductController@unfeatured');
    Route::get('/admin/product/active/{id}', 'ProductController@active');
    Route::get('/admin/product/inactive/{id}', 'ProductController@Inactive');


    //Manage Customer
    Route::get('/admin/customer/create', 'CustomerController@create');
    Route::post('/admin/customer/store', 'CustomerController@store');
    Route::get('/admin/customer/show', 'CustomerController@show');
    Route::get('/admin/customer/edit/{id}', 'CustomerController@edit');
    Route::post('/admin/customer/update', 'CustomerController@update');
    Route::get('/admin/customer/delete/{id}', 'CustomerController@destroy');
    Route::get('/admin/customer/notification/{id}', 'CustomerNotificationController@show');
    Route::get('/admin/notification/delete/{id}', 'CustomerNotificationController@destroy');
    Route::post('/admin/notification/save', 'CustomerNotificationController@store');

    //Manage Customer
    Route::get('/admin/customer/create', 'CustomerController@create');
    Route::post('/admin/customer/store', 'CustomerController@store');
    Route::get('/admin/customer/show', 'CustomerController@show');
    Route::get('/admin/customer/edit/{id}', 'CustomerController@edit');
    Route::post('/admin/customer/update', 'CustomerController@update');

    //Manage Order
    Route::any('/admin/order/show', 'OrderController@show');
    Route::get('/admin/order/details/{invoice}', 'OrderController@orderDetails');
    Route::post('/admin/order/cash-payment/store', 'OrderController@cashPaymentStore');
    Route::get('/admin/order-invoice/print/{invoice}', 'OrderController@InvoicePrint');
    Route::get('/admin/order-status/history/{id}', 'OrderController@orderDeliveryStatus');
    Route::post('/admin/order/store', 'OrderController@store');
    Route::get('/admin/order/edit/{id}', 'OrderController@edit');
    Route::post('/admin/order/update', 'OrderController@update');

    //delivery status
    Route::get('/admin/order-status/update/{id}/{value}', 'OrderStatusController@statusUpdate');

    //Manage Coupon
    Route::get('/admin/coupon/show', 'CouponController@show');
    Route::get('/admin/coupon/create', 'CouponController@create');
    Route::post('/admin/coupon/store', 'CouponController@store');
    Route::get('/admin/coupon/delete/{id}', 'CouponController@destroy');
    Route::get('/admin/coupon/edit/{id}', 'CouponController@edit');
    Route::post('/admin/coupon/update', 'CouponController@update');

    /*    //Manage Voucher
        Route::get('/admin/voucher/create', 'VoucherController@index');
        Route::get('/admin/voucher/show', 'VoucherController@show');
        Route::post('/admin/voucher/store', 'VoucherController@store');
        Route::get('/admin/voucher/delete/{id}', 'VoucherController@destroy');
        Route::get('/admin/voucher/edit/{id}', 'VoucherController@edit');
        Route::get('/admin/voucher/inactive/edit/{id}', 'VoucherController@inactive');
        Route::get('/admin/voucher/active/edit/{id}', 'VoucherController@active');
        Route::post('/admin/voucher/update', 'VoucherController@update');*/


    //Manage Order
    Route::get('/admin/shop/show', 'ShopController@show');
    Route::get('/admin/shop/create', 'ShopController@create');
    Route::post('/admin/shop/store', 'ShopController@store');
    Route::post('/admin/commission-rate/update', 'ShopController@commisionUpdate');
    Route::get('/admin/shop/delete/{id}', 'ShopController@destroy');

    Route::get('/admin/shop/update-status/{id}/{status}', 'ShopController@updateStatus');


    Route::get('/admin/shop/edit/{id}', 'ShopController@edit');
    Route::post('/admin/shop/update', 'ShopController@update');
    Route::get('/admin/shop/order/{id}', 'ShopController@ShopOrder');
    Route::get('/admin/shop/order-details/{invoice}', 'ShopController@ShopOrderDetails');
    Route::get('/admin/shop/order-status/history/{id}', 'ShopController@ShopOrderDeliveryHistory');
    Route::get('/admin/shop/payment-details/{id}', 'ShopController@paymentDetails');
    Route::get('/admin/shop-details/{id}', 'ShopController@shopDetails');
    Route::post('/admin/shop-payment/save', 'MerchantPaymentController@store');

    //Manage Parent Category
    Route::get('/admin/parent-category/create', 'ParentCategoryController@index');
    Route::get('/admin/parent-category/show', 'ParentCategoryController@show');
    Route::post('/admin/parent-category/store', 'ParentCategoryController@store');
    Route::get('/admin/parent-category/delete/{id}', 'ParentCategoryController@destroy');
    Route::get('/admin/parent-category/edit/{id}', 'ParentCategoryController@edit');
    Route::post('/admin/parent-category/update', 'ParentCategoryController@update');

    //Manage Category
    Route::get('/admin/category/show', 'ProductCategoryController@show');
    Route::get('/admin/category/create', 'ProductCategoryController@create');
    Route::post('/admin/category/store', 'ProductCategoryController@store');
    Route::get('/admin/category/delete/{id}', 'ProductCategoryController@destroy');
    Route::get('/admin/category/edit/{id}', 'ProductCategoryController@edit');
    Route::post('/admin/category/update', 'ProductCategoryController@update');


    //Manage Sub Category
    Route::get('/admin/sub-category/show', 'SubCategoryController@show');
    Route::get('/admin/sub-category/create', 'SubCategoryController@create');
    Route::post('/admin/sub-category/store', 'SubCategoryController@store');
    Route::get('/admin/sub-category/delete/{id}', 'SubCategoryController@destroy');
    Route::get('/admin/sub-category/edit/{id}', 'SubCategoryController@edit');
    Route::post('/admin/sub-category/update', 'SubCategoryController@update');

    //Manage Brand
    Route::get('/admin/brand/show', 'BrandController@show');
    Route::get('/admin/brand/create', 'BrandController@create');
    Route::post('/admin/brand/store', 'BrandController@store');
    Route::get('/admin/brand/delete/{id}', 'BrandController@destroy');
    Route::get('/admin/brand/edit/{id}', 'BrandController@edit');
    Route::post('/admin/brand/update', 'BrandController@update');

    //Manage Size
    Route::get('/admin/size/show', 'SizeController@show');
    Route::get('/admin/size/create', 'SizeController@create');
    Route::post('/admin/size/store', 'SizeController@store');
    Route::get('/admin/size/delete/{id}', 'SizeController@destroy');
    Route::get('/admin/size/edit/{id}', 'SizeController@edit');
    Route::post('/admin/size/update', 'SizeController@update');

    //Manage Color
    Route::get('/admin/color/show', 'ColorController@show');
    Route::get('/admin/color/create', 'ColorController@create');
    Route::post('/admin/color/store', 'ColorController@store');
    Route::get('/admin/color/delete/{id}', 'ColorController@destroy');
    Route::get('/admin/color/edit/{id}', 'ColorController@edit');
    Route::post('/admin/color/update', 'ColorController@update');

    //Manage Slider
    Route::get('/admin/slider/show', 'SliderController@show');
    Route::get('/admin/slider/create', 'SliderController@create');
    Route::post('/admin/slider/store', 'SliderController@store');
    Route::get('/admin/slider/delete/{id}', 'SliderController@destroy');
    Route::get('/admin/slider/edit/{id}', 'SliderController@edit');
    Route::post('/admin/slider/update', 'SliderController@update');


    //Manage promotional slider
    Route::get('/admin/promotional-slider/show', 'PromotionalSliderController@show');
    Route::get('/admin/promotional-slider/create', 'PromotionalSliderController@create');
    Route::post('/admin/promotional-slider/store', 'PromotionalSliderController@store');
    Route::get('/admin/promotional-slider/delete/{id}', 'PromotionalSliderController@destroy');
    Route::get('/admin/promotional-slider/edit/{id}', 'PromotionalSliderController@edit');
    Route::post('/admin/promotional-slider/update', 'PromotionalSliderController@update');


    //Manage User
    Route::get('/admin/user/show', 'UserController@show');
    Route::get('/admin/user/create', 'UserController@create');
    Route::post('/admin/user/store', 'UserController@store');
    Route::get('/admin/user/delete/{id}', 'UserController@destroy');
    Route::get('/admin/user/edit/{id}', 'UserController@edit');
    Route::post('/admin/user/update', 'UserController@update');

    //Manage User
    Route::get('/admin/video/show', 'VideoController@show');
    Route::post('/admin/video/store', 'VideoController@store');
    Route::get('/admin/video/delete/{id}', 'VideoController@destroy');
    Route::post('/admin/video/update', 'VideoController@update');

    //Manage Delivery charge
    Route::get('/admin/delivery-charge/create', 'DeliveryChargeController@create');

    Route::post('/admin/delivery-charge/store', 'DeliveryChargeController@store');

    //////profile update
    Route::post('/admin/profile/update', 'DashboardController@update');
    ///app setting
    Route::get('/admin/app/setting', 'AppSettingController@appSetting');
    Route::post('/admin/app/update', 'AppSettingController@update');


});





/*Public Area started here*/

Route::get('/', 'Controller@home');
Route::any('/shop/{id}/{name}', 'Controller@shopProducts');
Route::get('/product/{id}/{name}', 'Controller@details');


Route::get('/error', 'Controller@error');
Route::get('/cart', 'Controller@cart');
Route::get('/checkout', 'Controller@checkout');
Route::get('/order/success', 'Controller@OrderSuccess');
Route::get('/contact', 'Controller@contact');
Route::get('/shops', 'Controller@shops');
Route::get('/delivery', 'Controller@delivery');
Route::get('/secure-payment', 'Controller@securePayment');
Route::post('/contact/store', 'ContactController@store');


Route::get('/parent-categories/{id}/{name}', 'Controller@parentaCategoryProduct');
Route::get('/categories/{id}/{name}', 'Controller@categoryProduct');
Route::get('/sub-categories/{id}/{name}', 'Controller@subCategoryProduct');


Route::any('/shop/{id}/{name}', 'Controller@shopProducts');

Route::any('/loll', 'CustomerController@orderSave');


Route::any('/offer', 'Controller@offer');
Route::any('/order-return-policy', 'Controller@returnPolicy');







/*Public Area ended here*/


/*Localization start*/
Route::get('locale/{locale}', function ($locale) {

    App::setLocale($locale);
    session()->put('locale', $locale);
    return redirect()->back();
});
/*Localization end*/


Route::group(['prefix' => "customer"], function () {
    Route::get('/sign-in', 'CustomerController@login');
    Route::get('/password-recovery', 'CustomerController@passwordRecovery');
    Route::post('/sign-in-check', 'CustomerController@loginCheck');
    Route::post('/register', 'CustomerController@register');
    Route::get('/notifications', 'CustomerController@notification');

    Route::get('/forget-password', 'CustomerController@forgetPassword');
    Route::any('/reset-password', 'CustomerController@resetPassword');


    Route::any('/order-save', 'CustomerController@orderSave');
    Route::any('/order-success', 'CustomerController@orderSuccess');
    Route::any('/order-failed', 'CustomerController@orderFailed');

});
Route::group(['prefix' => "customer", 'middleware' => ['customer']], function () {


    Route::get('/profile', 'CustomerController@profile');
    Route::get('/orders', 'CustomerController@orderHistory');
    Route::get('/orders-detail/{order_invoice}', 'CustomerController@orderDetails');
    Route::post('/profile/update', 'CustomerController@profileUpdate');
    Route::post('/address/update', 'CustomerController@addressUpdate');

    Route::post('/password/update', 'CustomerController@passwordUpdate');
    Route::get('/logout', 'CustomerController@logout');


    Route::any('/review-store', 'CustomerController@reviewStore');

});

Route::any('/success', 'CustomerController@success');
Route::any('/fail', 'CustomerController@fail');
Route::any('/cancel', 'CustomerController@cancel');

Route::get('/about', 'Controller@about');

//Privacy_Policy
Route::get('/privacy_policy', 'Controller@privacy_policy');
/*Route::get('/details/{id}', 'Controller@details2');*/
Route::get('/details/{id}/{name}', 'Controller@details');
Route::any('/success/{invoice}', 'Controller@order');
Route::any('/customer/order/store', 'Controller@placeOrder');

Route::any('/search', 'Controller@search');
Route::any('/product/search', 'Controller@productSearch');

Route::any('/shop/registration', 'Controller@shopRegistration');
Route::any('/shop/registration-do', function (Request $request) {

    $is_exist = User::where('phone', $request['phone'])->first();
    if (!is_null($is_exist)) {
        return back()->with('failed', 'This phone already used');
    }

    try {
        $otp = getOtp();
        $request['otp'] = $otp;

        $user_array = [
            'name' => $request['name'],
            'phone' => $request['phone'],
            'email' => $request['email'],
            'otp' => $request['otp'],
            'password' => Hash::make($request['password'])
        ];

        User::insert($user_array);
        sendSms($request['phone'], "Your eHaat verification code is: " . $otp);
        Session::put('phone', $request['phone']);
        return Redirect::to('/otp-verify');

    } catch (Exception $exception) {
        return back()->with('failed', $request->all());
        return back()->with('failed', 'There is an error');
    }
});
Route::any('/otp-verify', 'Controller@otpVerify');
Route::any('/failed', 'Controller@failed');

Route::get('/admin/login', function () {
    return view('admin.login.index');
});
Route::get('/admin/forgot-password', function () {
    return view('admin.login.forgot_password');
});


Route::post('/admin/reset-password', 'AuthController@resetPassword');
Route::post('/admin/login-check', 'AuthController@loginCheck');
Route::get('/logout', 'AuthController@logout');
Route::get('/admin/logout', 'AuthController@logout');


Route::post('/payment-callback', 'Controller@callbackResponse');
Route::get('/payment-success', 'Controller@paymentSuccess');


//District/ Division API
Route::any('/pro/search', 'ApiController@pSearch');
Route::any('/my/search', 'ApiController@mySearch');

Route::get('/get-suppliers/{area_type}/{area_id}/{service_type}', 'ApiController@getSuppliers');

Route::get('/product/category/{id}', 'ProductController@getSubCategory');


// SSLCOMMERZ Start
Route::get('/example1', 'SslCommerzPaymentController@exampleEasyCheckout');
Route::get('/example2', 'SslCommerzPaymentController@exampleHostedCheckout');

Route::any('/pay', 'SslCommerzPaymentController@index');
Route::post('/pay-via-ajax', 'SslCommerzPaymentController@payViaAjax');

Route::any('/ipn', 'SslCommerzPaymentController@ipn');
Route::any('/product/search', 'ProductController@search');

//SSLCOMMERZ END


/*Shopping Cart API*/

Route::group(['prefix' => 'cart'], function () {
    Route::any('/add', 'ShoppingCartController@addItem');
    Route::any('/update', 'ShoppingCartController@updateQuantity');
    Route::any('/remove/{id}', 'ShoppingCartController@removeItem');
    Route::any('/all', 'ShoppingCartController@getAll');
    Route::any('/remove-all', 'ShoppingCartController@removeAllItem');
    Route::any('/get-total-weight', 'ShoppingCartController@getTotalWeight');
    Route::any('/get-total-item', 'ShoppingCartController@getTotalItem');
    Route::any('/get-total-price', 'ShoppingCartController@getSubTotal');
    Route::any('/get-total-discount', 'ShoppingCartController@getTotalDiscount');
    Route::any('/get-total-set', 'ShoppingCartController@getTotalSet');
});


/*Public Page  API*/

Route::group(['prefix' => 'web-api'], function () {
    Route::any('/products', 'ApiController@getProducts');
    Route::any('/whole-sale/products', 'ApiController@getWholeSaleProducts');
    Route::any('/product/parent-category/{id}', 'ApiController@getCategories');
    Route::any('/product/category/{id}', 'ApiController@getSubCategories');

    Route::any('/whole-sale-product/categories/{id}', 'ApiController@getWholeSaleProductCategories');

    Route::any('/shop-products', 'ApiController@getShopProducts');
    Route::any('/promo-code', 'ApiController@couponValidate');

    Route::any('/get-division', 'ApiController@getDivision');
    Route::any('/get-district', 'ApiController@getDistrict');
    Route::any('/get-upazila', 'ApiController@getUpazila');
});

Route::any('/rrrr', 'Api\AuthController@lol');

Route::any('/lol', function (Request $request) {


    return getWholeSaleCategory();
    return sendSms("01717849968", "Your MARTVENUE OTP is : 1254");
    //$message_id="1611667057036738";
    //return getMessageStatus($message_id);

});

Route::any('/test', function (Request $request) {

    return public_path('/images');
    $is_whole_sale = 0;
    foreach (Cart::content() as $item) {
        if ($item->options->product_type == "whole_sale") {
            $is_whole_sale = 1;
            break;
        }
    }

    return $is_whole_sale;
});
Route::any('/wholesale/delete', function (Request $request) {
    $wholesales = \App\WholeSale::get();
    foreach ($wholesales as $res) {
        \App\WholeSaleProductImage::where('product_id', $res->whole_sales_product_id)->delete();
        \App\WholeSalePriceRange::where('whole_sales_product_id', $res->whole_sales_product_id)->delete();

        \App\WholeSale::where('whole_sales_product_id', $res->whole_sales_product_id)->delete();
    }
});
Route::any('/test2', function (Request $request) {

    dump($image = $request->file('file'));
    return;

    $imageName = time() . '.' . $image->getClientOriginalExtension();
    $image->move(public_path('loll'), $imageName);

    return response()->json(['success' => $imageName]);

});
Route::any('/order-delete', function (Request $request) {

    Order::truncate();
    \App\OrderItem::truncate();
    \App\OrderStatus::truncate();
    \App\OrderPayment::truncate();
});

