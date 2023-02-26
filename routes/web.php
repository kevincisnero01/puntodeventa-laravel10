<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProviderController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('categories', CategoryController::class)->names('categories');

Route::resource('providers', ProviderController::class)->names('providers');