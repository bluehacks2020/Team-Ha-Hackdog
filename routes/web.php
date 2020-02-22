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

Route::resource('products', 'ProductsController')->only(['index', 'show']);

Route::get('/home', 'DashboardController@test')->name('home');

Auth::routes();

Route::group(['middleware' => 'auth', 'prefix' => 'dashboard'], function () {
	Route::get('/', 'DashboardController@index')->name('dashboard.index');
});