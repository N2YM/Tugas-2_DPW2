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

Route::get('/', function () {
    return view('template-shop.home');
});



// Login & Register
Route::get('login', function(){
    return view('login');
});
Route::get('register', function(){
    return view('register');
});



// Template Shop
Route::get('home', function(){
    return view('template-shop.home');
});
Route::get('store', function(){
    return view('template-shop.store');
});
Route::get('product', function(){
    return view('template-shop.product');
});
Route::get('checkout', function(){
    return view('template-shop.checkout');
});
Route::get('contact', function(){
    return view('template-shop.contact');
});