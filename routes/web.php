<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\CategoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/products', function () {
    return view('products');
});

// Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');
// Route::get('/categories/{category}', [CategoryController::class, 'show'])->name('categories.show');

Route::get('/categories', [CategoryController::class, 'index'])->name('categories.index');

// ROUTE PREFIX
Route::prefix('categories')->group(function(){
    Route::get('/food-beverage', [CategoryController::class, 'foodBeverage'])->name('categories.food-beverage');
    Route::get('/beauty-health', [CategoryController::class, 'beautyHealth'])->name('categories.beauty-health');
    Route::get('/home-care', [CategoryController::class, 'homeCare'])->name('categories.home-care');
    Route::get('/baby-kid', [CategoryController::class, 'babyKid'])->name('categories.baby-kid');
});

Route::get('/sales', [SaleController::class, 'index'])->name('sales.index');

Route::get('/user/{id}/name/{name}', function ($id, $name) {
    return view('profile', ['id' => $id, 'name' => $name]);
})->name('profile');
