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

Route::get('/checkout', function () {
  return view('products.checkout');
});

Route::get('/payment', function () {
  return view('products.payment');
});

Route::get('/checkout-payment', function () {
  return view('products.checkout-payment');
});

Route::resource('products', 'ProductsController')->only(['index', 'show']);

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

