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

Route::view('/', 'store.home')->name('home');
Route::view('/inicio', 'store.home')->name('home');
Route::view('/articulo/{Product:slug?}', 'store.product')->name('product');
Route::view('/checkout', 'store.checkout')->name('checkout');
Route::view('/checkout/confirm', 'store.confirm')->name('checkout-confirm');
Route::view('/pago', 'store.payment')->name('payment');
Route::view('/contacto', 'store.contact')->name('contact');