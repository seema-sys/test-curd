<?php

use Illuminate\Support\Facades\Route;
  
use App\Http\Controllers\ProductController;
    
Route::resource('products', ProductController::class);
Route::get('/products', [\App\Http\Controllers\ProductController::class, 'index'])->name('products.index');  //index all the data view...

?>