<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route Home
Route::get('/', HomeController::class)->name('home.index');

// Route Product
Route::get('/products/manage-product', [ProductController::class, 'manageProduct'])->name('products.manage');
Route::resource('products', ProductController::class);

// Route Cart
Route::get('/cart', [CartController::class, 'index'])->name('cart');
Route::post('/cart', [CartController::class, 'store'])->name('cart.store');
Route::delete('/cart/{cart}', [CartController::class, 'destroy'])->name('cart.destroy');
Route::delete('/cart-details/{cart}/{product}', [CartDetailController::class, 'destroy'])->name('cart-detail.destroy');

// Route Transaction / History
Route::get('/transactions', [TransactionController::class, 'index'])->name('transaction');

// Route Profile
Route::get('/profile', UserController::class)->name('profile');

// Route Auth (Login, Register, Logout)
Route::get('/login', [Auth\LoginController::class, 'index'])->name('login.index');
Route::post('/login', [Auth\LoginController::class, 'login'])->name('login.validate');
Route::get('/register', [Auth\RegisterController::class, 'index'])->name('register.show');
Route::post('/register', [Auth\RegisterController::class, 'store'])->name('register.store');
Route::post('/logout', [Auth\LoginController::class, 'logout'])->name('logout');
Route::get('auth/google', [Auth\LoginController::class, 'redirectToGoogle'])->name('login.google');
Route::get('auth/google/callback', [Auth\LoginController::class, 'handleGoogleCallback']);
