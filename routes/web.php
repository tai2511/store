<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

Route::get('/login', function () {
    return view('pages.login');
})->name('login.get');

Route::get('/logout', function () {
    Session::forget('user');
    return redirect('login');
})->name('logout.get');

Route::get('/register', function () {
    return view('pages.register');
})->name('register.get');

Route::get('/', function () {
    return view('pages.homepage');
})->name('home.get');

Route::post('/register', 'UserController@register')->name('register.post');
Route::post('/login', 'UserController@login')->name('login.post');
Route::get('/shop', 'ProductController@index')->name('product.index.get');

Route::get('/product/{id}', 'ProductController@show')->name('product.show.get');
Route::post('/product', 'ProductController@addToCart')->name('product.addToCart.post');

Route::get('/cart', 'CartController@index')->name('cart.index.get');
Route::get('/remove-cart/{id}', 'CartController@destroy')->name('cart.destroy.get');

Route::get('/checkout', 'CartController@checkout')->name('cart.checkout.get');
Route::post('/order', 'CartController@order')->name('cart.order.post');
Route::get('/order-detail', 'CartController@orderDetail')->name('cart.order_detail.get');

