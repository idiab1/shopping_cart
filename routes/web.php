<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return redirect()->route('store');
});

Auth::routes();
// -->>> Home page
Route::get('/home', 'HomeController@index')->name('home');

// -->>> Store Route
Route::get('/store', 'HomeController@store')->name('store');

// -->>> Product Routes
Route::get('/products', 'ProductController@index')->name('products.index');

// -->>> Add to cart route
Route::get('/addtocart/{product}', 'ProductController@addToCart')->name('cart.add');
