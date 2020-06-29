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
Auth::routes();

Route::get('/', 'Store\HomePageController')->name('home');
Route::get('/inicio', 'Store\HomePageController')->name('home');
Route::get('/articulo/{product:slug?}', 'Store\ProductPageController')->name('product');
Route::view('/checkout', 'store.checkout')->name('checkout');
Route::view('/checkout/confirm', 'store.confirm')->name('checkout-confirm');
Route::view('/pago', 'store.payment')->name('payment');
Route::view('/contacto', 'store.contact')->name('contact');

Route::get('/cart/content', 'Store\CartController@getContent')->name('getContentCart');
Route::get('/cart/{product:ref}/add', 'Store\CartController@addItem')->name('addItemCart');
Route::get('/cart/{rowId}/remove', 'Store\CartController@removeItem')->name('removeItemCart');

//Route::get('/home', 'HomeController@index')->name('home');
