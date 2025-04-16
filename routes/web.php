<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('products', ProductController::class);

// Route khusus untuk menampilkan produk berdasarkan kategori
Route::get('/categories/{category}/products', [ProductController::class, 'byCategory'])
    ->name('products.by_category');