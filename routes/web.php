<?php

use Illuminate\Support\Facades\Route;

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
})->name('products');

// Route::get('/profile', function () {
//     return view('sales');
// });

Route::prefix('categories')->group(function () {
    Route::get('/food-beverage', function () {
        return ['category' => 'food-beverage'];
    })->name('categories.food-beverage');
    Route::get('/beauty-health', function () {
        return view('categories.edit');
    });
    Route::get('/home-care', function () {
        return view('categories.delete');
    });
    Route::get('/baby-kid', function () {
        return view('categories.delete');
    });
});

Route::get('/user/{id}/name/{name}', function ($id, $name) {
    return view('profile', ['id' => $id, 'name' => $name]);
})->name('profile');
