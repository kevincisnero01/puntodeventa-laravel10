<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProviderController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('categories', CategoryController::class)->names('categories');

Route::resource('providers', ProviderController::class)->names('providers');

Route::resource('products', ProductController::class)->names('products');

Route::resource('clients', ProductController::class)->names('clients');