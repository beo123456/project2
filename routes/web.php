<?php


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

//// FRONTEND
Route::get('','HomeController@Index');
Route::post('search','HomeController@Search');
Route::get('product','ProductController@ListProduct');
Route::get('category/{id}','CategoryProduct@ShowCategoryHome');
Route::get('brand/{id}','BrandProductController@ShowBrandHome');
Route::get('product_detail/{id}','ProductController@ProductDetail');


////cart
Route::group(['prefix' => 'cart'], function() {
    Route::get('','CartController@GetCart');
    Route::get('add','CartController@AddProduct');
    route::get('delete/{rowId}','CartController@Delete')->name('delete_cart');
    Route::post('update/{rowId}','CartController@Update')->name('update_cart');
});

//// checkout
    Route::get('checkout','CheckoutController@Checkout');
    Route::post('checkout','CheckoutController@AddOrder');
    Route::post('product_order','CheckoutController@ProductOrder');

////contact
Route::get('contact','HomeController@GetContact');








//// BACKEND
Route::get('admin-login','AdminController@GetIndex')->middleware('CheckLogout');
Route::post('admin-login','AdminController@PostIndex');
Route::get('logout','AdminController@Logout')->name('logout');



Route::group(['prefix' => 'admin','middleware'=>'CheckLogin'], function() {
    Route::get('','AdminController@ShowDashboard');


    //// Category Product
Route::group(['prefix' => 'category'], function() {
    Route::get('','CategoryProduct@GetList');
    Route::get('add','CategoryProduct@GetAdd');
    Route::post('add','CategoryProduct@PostAdd');
    Route::get('unactive/{id}','CategoryProduct@UnactiveCategory')->name('unactive_category');
    Route::get('active/{id}','CategoryProduct@ActiveCategory')->name('active_category');
    Route::get('edit/{id}','CategoryProduct@GetEdit');
    Route::post('edit/{id}','CategoryProduct@PostEdit');
    Route::get('delete/{id}','CategoryProduct@Delete');
});

// Brand Product
Route::group(['prefix' => 'brand'], function() {
    Route::get('','BrandProductController@GetList');
    Route::get('add','BrandProductController@GetAdd');
    Route::post('add','BrandProductController@PostAdd');
    Route::get('unactive/{id}','BrandProductController@UnactiveBrand')->name('unactive_brand');
    Route::get('active/{id}','BrandProductController@ActiveBrand')->name('active_brand');
    Route::get('edit/{id}','BrandProductController@GetEdit');
    Route::post('edit/{id}','BrandProductController@PostEdit');
    Route::get('delete/{id}','BrandProductController@Delete');
});

// Product
Route::group(['prefix' => 'product'], function() {
    Route::get('','ProductController@GetList');
    Route::get('add','ProductController@GetAdd');
    Route::post('add','ProductController@PostAdd');
    Route::get('unactive/{id}','ProductController@UnactiveProduct')->name('unactive_product');
    Route::get('active/{id}','ProductController@ActiveProduct')->name('active_product');
    Route::get('edit/{id}','ProductController@GetEdit');
    Route::post('edit/{id}','ProductController@PostEdit');
    Route::get('delete/{id}','ProductController@Delete');
});

///order

Route::group(['prefix' => 'order'], function() {
    route::get('','OrderController@ShowOrder');
    route::get('processed','OrderController@OrderProcessed');
    route::get('detail/{order_id}','OrderController@OrderDetail');
    route::get('paid/{order_id}','OrderController@Paid');
});

///banner

Route::group(['prefix' => 'banner'], function() {
    route::get('','BannerController@ListBanner');
    route::get('add','BannerController@GetAddBanner');
    route::post('add','BannerController@PostAddBanner');
    route::get('delete/{id}','BannerController@Delete');
    route::get('active/{id}','BannerController@ActiveBanner');
    route::get('unactive/{id}','BannerController@UnactiveBanner');
});

///user

Route::group(['prefix' => 'user'], function() {
    route::get('','UserController@GetListUser');
    route::get('add','UserController@GetAddUser');
    route::post('add','UserController@PostAddUser');
    route::get('edit/{id}','UserController@GetEdit');
    route::post('edit/{id}','UserController@PostEdit');
    route::get('delete/{id}','UserController@Delete');



});






});





