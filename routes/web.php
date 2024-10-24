<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;


// Admin route group with middleware (optional)
// Route::prefix('admin')->name('admin.')->middleware(['auth', 'is_admin'])->group(function () {
Route::prefix('admin')->group(function () {

    // Route to add a new product
    Route::get('/', function(){
        return view('admin.dashboard.index');
    });
    Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
    Route::post('/product/store', [ProductController::class, 'store'])->name('product.store');

    // Route to view all products
    Route::get('/products', [ProductController::class, 'index'])->name('product.index');

    // Route for categories
    Route::get('/categories', [CategoryController::class, 'index'])->name('category.index');
    Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
    Route::post('/category/store', [CategoryController::class, 'store'])->name('category.store');

    // Route for tags
    Route::get('/tags', [TagController::class, 'index'])->name('tag.index');
    Route::get('/tag/create', [TagController::class, 'create'])->name('tag.create');
    Route::post('/tag/store', [TagController::class, 'store'])->name('tag.store');
});



