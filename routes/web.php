<?php

use App\Http\Controllers\ProductController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\Environment\Console;

Route::get('/', function () {
    
    return redirect()->route('products.index');
});

Route::post('product/create',function(){
    return ;
});


Route::resource('products',ProductController::class);