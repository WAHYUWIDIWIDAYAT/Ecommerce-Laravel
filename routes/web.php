<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'App\Http\Controllers\Ecommerce\FrontController@index')->name('front.index');
Route::get('/product','App\Http\Controllers\Ecommerce\FrontController@product')->name('front.product');
Route::get('/category/{slug}', 'App\Http\Controllers\Ecommerce\FrontController@categoryProduct')->name('front.category');
Route::get('/product/{slug}', 'App\Http\Controllers\Ecommerce\FrontController@show')->name('front.show_product');
Route::post('cart', 'App\Http\Controllers\Ecommerce\CartController@addToCart')->name('front.cart');
Route::get('/cart', 'App\Http\Controllers\Ecommerce\CartController@listCart')->name('front.list_cart');
Route::post('/cart/update', 'App\Http\Controllers\Ecommerce\CartController@updateCart')->name('front.update_cart');
Route::get('/checkout', 'App\Http\Controllers\Ecommerce\CartController@checkout')->name('front.checkout');
Route::post('/checkout', 'App\Http\Controllers\Ecommerce\CartController@processCheckout')->name('front.store_checkout');
Route::get('/checkout/{invoice}', 'App\Http\Controllers\Ecommerce\CartController@checkoutFinish')->name('front.finish_checkout');
Route::get('/contact', 'App\Http\Controllers\Contact@showContactForm')->name('contact');
Route::post('/contact', 'App\Http\Controllers\Contact@sendMail');
Route::get('/about','App\Http\Controllers\about@AboutUs')->name('about');
Route::get('/artikel', 'App\Http\Controllers\PostController@index_public')->name('artikel');
Route::resource('artikel', 'App\Http\Controllers\PostController')->except(['index','create']);
Route::get('kontak','App\Http\Controllers\ContactController@index')->name('kontak');

Route::group(['prefix' => 'member', 'namespace' => 'Ecommerce'], function() {
    Route::get('login', '\App\Http\Controllers\Ecommerce\LoginController@loginForm')->name('customer.login'); 
    Route::get('verify/{token}', '\App\Http\Controllers\Ecommerce\FrontController@verifyCustomerRegistration')->name('customer.verify');
    Route::post('login', '\App\Http\Controllers\Ecommerce\LoginController@login')->name('customer.post_login');
    Route::group(['middleware' => 'customer'], function() {
        Route::get('dashboard', '\App\Http\Controllers\Ecommerce\LoginController@dashboard')->name('customer.dashboard');
        Route::get('logout', '\App\Http\Controllers\Ecommerce\LoginController@logout')->name('customer.logout');
        Route::get('orders', '\App\Http\Controllers\Ecommerce\OrderController@index')->name('customer.orders');
        Route::get('orders/{invoice}', '\App\Http\Controllers\Ecommerce\OrderController@view')->name('customer.view_order');
        Route::get('payment', '\App\Http\Controllers\Ecommerce\OrderController@paymentForm')->name('customer.paymentForm');
        Route::post('payment', '\App\Http\Controllers\Ecommerce\OrderController@storePayment')->name('customer.savePayment');
        Route::get('setting', '\App\Http\Controllers\Ecommerce\FrontController@customerSettingForm')->name('customer.settingForm');
        Route::post('setting', '\App\Http\Controllers\Ecommerce\FrontController@customerUpdateProfile')->name('customer.setting');
        Route::post('orders/accept', '\App\Http\Controllers\Ecommerce\OrderController@acceptOrder')->name('customer.order_accept');
    });
});

Auth::routes();
Route::group(['prefix' => 'administrator', 'middleware' => 'auth'], function() {
    Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');
    Route::resource('category', 'App\Http\Controllers\CategoryController')->except(['create', 'show']);
    Route::resource('product', 'App\Http\Controllers\ProductController')->except(['show']);
    Route::resource('product', 'App\Http\Controllers\ProductController');
    Route::resource('posts', 'App\Http\Controllers\PostController');
    Route::group(['prefix' => 'orders'], function() {
        Route::get('/', 'App\Http\Controllers\OrderController@index')->name('orders.index');
        Route::delete('/{id}', 'App\Http\Controllers\OrderController@destroy')->name('orders.destroy');
        Route::get('/{invoice}', 'App\Http\Controllers\OrderController@view')->name('orders.view');
        Route::get('/payment/{invoice}', 'App\Http\Controllers\OrderController@acceptPayment')->name('orders.approve_payment');
        Route::post('/shipping', 'App\Http\Controllers\OrderController@shippingOrder')->name('orders.shipping');
    });
});