<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    header('products',true);
    return;
});


Route::resource('products',ProductController::class);