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

Route::get('/','ShopperController@index');
Route::get('/home','ShopperController@index');
Route::get('/shop','ShopperController@get');
Route::post('/cart/add','ShopperController@add');
Route::post('/cart/remove','ShopperController@remove')->name('delete_from_cart');