<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProviderController;
use App\Http\Controllers\PurchaseController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('categories', CategoryController::class)->names('admin.categories');

Route::resource('providers', ProviderController::class)->names('providers');

Route::resource('products', ProductController::class)->names('products');

Route::resource('clients', ProductController::class)->names('clients');

Route::resource('purchases', PurchaseController::class)->names('purchases');