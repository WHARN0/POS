<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SellingsController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::prefix('products')->group(function () {
    Route::get('/', [ProductController::class, 'index'])->name('products.index');
    Route::get('/category/food-beverage', [ProductController::class, 'foodBeverage'])->name('products.foodBeverage');
    Route::get('/category/beauty-health', [ProductController::class, 'beautyHealth'])->name('products.beautyHealth');
    Route::get('/category/home-care', [ProductController::class, 'homeCare'])->name('products.homeCare');
    Route::get('/category/baby-kid', [ProductController::class, 'babyKid'])->name('products.babyKid');
});

Route::get('/user/{id}/name/{name}', [UserController::class, 'show'])->name('user.show');

Route::get('/sellings', [SellingsController::class, 'index'])->name('sellings.index');