<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/products', [App\Http\Controllers\ProductController::class, 'index'])->name("product_list");

Route::get('/products/create', [App\Http\Controllers\ProductController::class, 'create'])->name("product_create");

Route::post('/products/store', [App\Http\Controllers\ProductController::class, 'store'])->name("product_store");

Route::get('/categories', [App\Http\Controllers\CategoryController::class, 'index'])->name("categories_list");