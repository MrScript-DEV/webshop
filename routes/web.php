<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientController;
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

// Client controller
Route::get('/', [ClientController::class, 'home'])->name('home');
Route::get('/shop', [ClientController::class, 'shop'])->name('shop');
Route::get('/cart', [ClientController::class, 'cart'])->name('cart');
Route::get('/checkout', [ClientController::class, 'checkout'])->name('checkout');
Route::get('/register', [ClientController::class, 'register'])->name('register');
Route::get('/signin', [ClientController::class, 'signin'])->name('signin');

// Admin controller
Route::get('/admin', [AdminController::class, 'home'])->name('admin.home');
Route::get('/addcategory', [AdminController::class, 'addcategory'])->name('admin.addcategory');
Route::get('/categories', [AdminController::class, 'categories'])->name('admin.categories');
Route::get('/addslider', [AdminController::class, 'addslider'])->name('admin.addslider');
Route::get('/sliders', [AdminController::class, 'sliders'])->name('admin.sliders');
Route::get('/addproduct', [AdminController::class, 'addproduct'])->name('admin.addproduct');
Route::get('/products', [AdminController::class, 'products'])->name('admin.products');
Route::get('/orders', [AdminController::class, 'orders'])->name('admin.orders');
