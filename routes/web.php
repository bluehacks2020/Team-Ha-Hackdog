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

Route::get('/', 'PagesController@index');

Route::get('/checkout', 'PagesController@checkout');

Route::post('super_carts', 'PagesController@postCarts')->name('pages.carts');
Route::post('super_carts/add', 'PagesController@postAddToCart')->name('pages.carts.add');
Route::post('super_carts/update', 'PagesController@postUpdateCart')->name('pages.carts.update');
Route::post('super_carts/delete', 'PagesController@postDeleteToCart')->name('pages.carts.delete');

Route::get('/payment', function () {
  return view('products.payment');
});

Route::post('/payment');

Route::get('/checkout-payment', function () {
  return view('products.checkout-payment');
});

Route::resource('products', 'ProductsController')->only(['index', 'show']);
Route::resource('sellers', 'SellersController')->only(['show']);

Route::get('/home', 'DashboardController@test')->name('home');

Auth::routes();

Route::group(['middleware' => 'auth', 'prefix' => 'dashboard'], function () {
  Route::get('/', 'DashboardController@index')->name('dashboard.index');
  Route::get('products', 'DashboardController@products')->name('dashboard.products');
  Route::get('products/add', 'DashboardController@addProduct')->name('dashboard.products.add');
  Route::get('orders', 'DashboardController@orders')->name('dashboard.orders');
  Route::get('sellers', 'DashboardController@sellers')->name('dashboard.sellers');

  Route::post('products/save', 'DashboardController@postSaveProduct')->name('dashboard.products.save');
  Route::post('products/delete', 'DashboardController@postDeleteProduct')->name('dashboard.products.delete');
  Route::post('orders/update_status', 'DashboardController@postUpdateOrderStatus')->name('dashboard.orders.update_status');
});
