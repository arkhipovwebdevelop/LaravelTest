<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ItemController;
use App\Http\Controllers\Api\CategoryController;

// Route for fetching items
Route::get('/items', [ItemController::class, 'index']);
Route::get('/items/{item}', [ItemController::class, 'show']); // Single item by ID

// Route for fetching categories
Route::get('/categories', [CategoryController::class, 'index']);
