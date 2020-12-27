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

Route::get('/', 'LandingPageController@index')->name('landing');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/shop', 'ShopController@index')->name('shop');
Route::get('/cart', 'CartController@index')->name('cart');
Route::post('/cart/store', 'CartController@store')->name('cart-store');
Route::patch('/cart/{id}', 'CartController@update')->name('cart-update');
Route::post('/cart/delete/{id}', 'CartController@delete')->name('cart-delete');
Route::get('/shop/{id}/detail/', 'ShopController@detail')->name('shop-detail');
Route::get('/shop/category/{id}', 'ShopController@category')->name('shop-category');
Route::post('/checkout', 'CheckoutController@store')->name('checkout');
