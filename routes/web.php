<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CategoryController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', function () {
        return view('admin'); // Main admin panel view, for example, admin.blade.php
    })->name('dashboard');

    // Resource routes for products, users, and categories
    Route::resource('products', ProductController::class);
    Route::resource('users', UserController::class);
    Route::resource('categories', CategoryController::class);
});


require __DIR__.'/auth.php';
