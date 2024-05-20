<?php

use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\AdminProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Middleware\AdminAuthMiddleware;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', [HomeController::class, 'index'])->name("home.index");
Route::get('/about', [HomeController::class, 'about'])->name("home.about");
Route::get('/products', [ProductController::class, 'index'])->name("product.index");
Route::get('/products/{id}', [ProductController::class, 'show'])->name("product.show");

Route::middleware([AdminAuthMiddleware::class])->group(function () {
    Route::get('/admin', [AdminHomeController::class, 'index'])->name("admin.home.index");
    Route::get('/admin/products', [AdminProductController::class, 'index'])->name("admin.product.index");
    Route::post('/admin/products/store', [AdminProductController::class, 'store'])->name("admin.product.store");
    Route::delete('/admin/products/delete/{id}', [AdminProductController::class, 'delete'])->name("admin.product.delete");
    Route::get('/admin/products/edit/{id}', [AdminProductController::class, 'edit'])->name("admin.product.edit");
    Route::put('/admin/products/update/{id}', [AdminProductController::class, 'update'])->name("admin.product.update");
});



// Route::get('/about', 'App\Http\Controllers\HomeController@about')->name("home.about");

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
