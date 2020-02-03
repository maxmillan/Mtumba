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

Route::get('/', 'indexpageController@index')->name('homepage');

Route::get('products/{id}','productDetailController@index');
Route::post('addCart','productDetailController@addCart');
Route::get('cart','cartController@index')->name('cart');
Route::post('cartDelete/{id}','cartController@cartDelete');
Route::post('registerCustom','RegisterController@register')->name('registerCustom');

Route::resource('checkout','checkoutController');
Route::view('ppp','productDetail');
Route::view('test','testPage');
Route::post('addPicture','frontpagePicturesController@store')->name('savePicture');

Route::get('category','CategoryController@index')->name('category');
Route::get('cartCount','cartController@cartCount');
Route::get('confirmation/{id}','confirmationRecieptController@index');
Route::post('confirm','confirmationRecieptController@placeOrder');
Route::post('loginCustom','LoginCustomController@login')->name('loginCustom');
Route::get('login@Custom','LoginOneController@index');
Route::post('loginOne','LoginOneController@login')->name('loginOne');
Route::get('orderDetails','OrderDetailController@index');
Route::get('orderTable','AdminAvailableOrderController@table');
Route::post('deleteOrder','AdminAvailableOrderController@deleteOrder')->name('deleteOrder');


Route::get('/home', 'HomeController@index')->name('home');
//admin routes

Route::get('admin','adminIndexController@index')->name('admin');
Route::get('millan','VendorIndexController@index')->name('millan');
Route::get('createProduct','CreateProductController@index');
Route::get('createProductAdmin','CreateProductAdminController@index');
Route::get('sellerAvailableOrder','SellerAvailableOrderController@index');
Route::get('adminAvailableOrder/{id}','AdminAvailableOrderController@index');
Route::get('myProduct','MyProductController@index');
Route::view('orderSuccess','admin.orderSuccess');

Route::view('authError','authError');



Auth::routes();


