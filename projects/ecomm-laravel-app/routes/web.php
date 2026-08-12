<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;


/*
|--------------------------------------------------------------------------
| Home
|--------------------------------------------------------------------------
*/

Route::get('/', function () {

    if (auth()->check()) {

        return redirect()
            ->route('products.index');

    }

    return redirect()
        ->route('login');

});


/*
|--------------------------------------------------------------------------
| Authentication
|--------------------------------------------------------------------------
*/

Route::middleware('guest')->group(function () {

    // Register
    Route::get(
        '/register',
        [AuthController::class, 'showRegister']
    )->name('register');

    Route::post(
        '/register',
        [AuthController::class, 'register']
    )->name('register.store');


    // Login
    Route::get(
        '/login',
        [AuthController::class, 'showLogin']
    )->name('login');

    Route::post(
        '/login',
        [AuthController::class, 'login']
    )->name('login.store');

});


Route::post(
    '/logout',
    [AuthController::class, 'logout']
)
->middleware('auth')
->name('logout');


/*
|--------------------------------------------------------------------------
| Protected Ecommerce Routes
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {

    /*
    |--------------------------------------------------------------------------
    | Categories
    |--------------------------------------------------------------------------
    */

    Route::resource(
        'categories',
        CategoryController::class
    );


    /*
    |--------------------------------------------------------------------------
    | Products
    |--------------------------------------------------------------------------
    */

    Route::resource(
        'products',
        ProductController::class
    );


    /*
    |--------------------------------------------------------------------------
    | Cart
    |--------------------------------------------------------------------------
    */

    Route::get(
        '/cart',
        [CartController::class, 'index']
    )->name('cart.index');


    Route::post(
        '/cart/add/{id}',
        [CartController::class, 'add']
    )->name('cart.add');


    Route::post(
        '/cart/remove/{id}',
        [CartController::class, 'remove']
    )->name('cart.remove');

});