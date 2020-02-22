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

Route::get('/', function () {
	return view('index');
});

Route::resource('products', 'ProductsController')->only(['index', 'show']);

Route::get('/home', 'DashboardController@test')->name('home');

Auth::routes();

Route::group(['middleware' => 'auth', 'prefix' => 'dashboard'], function () {
	Route::get('/', 'DashboardController@index')->name('dashboard.index');
  Route::get('products', 'DashboardController@products')->name('dashboard.products');
  Route::get('products/add', 'DashboardController@addProduct')->name('dashboard.products.add');

  Route::post('products/save', 'DashboardController@postSaveProduct')->name('dashboard.products.save');
});
