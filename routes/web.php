<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/products', [App\Http\Controllers\ProductController::class, 'index'])->name("product_list");