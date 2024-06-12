<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\customerController;

Route::get('/', function () {
    return view('index');
});

Route::get('/index', [CustomerController::class, 'showIndex']);
Route::get('/shop', [CustomerController::class, 'showShop']);
Route::get('/checkout', [CustomerController::class, 'showCheckout'])->name('checkout');
Route::get('/cart', [CustomerController::class, 'showCart']);
Route::get('/contact', [CustomerController::class, 'showContact']);

Route::resource ('billing', customerController::class);
