<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\loginController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Models\Order;
use App\Models\Post;
use App\Models\Product;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [AuthController::class, 'Register']);
    Route::post('/register', [AuthController::class, 'RegisterPost']);
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'loginPost']);
    Route::get('login/google', [loginController::class, 'redirectToGoogle'])->name('login.google');
    Route::get('/login/google/callback', [loginController::class, 'handleGooglecallback']);

    Route::get('login/facebook', [loginController::class, 'redirectToFacebook'])->name('login.facebook');
    Route::get('/login/facebook/callback', [loginController::class, 'handleFacebookcallback']);
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', [ProductController::class, 'viewproducts'])->name('viewproducts');
    Route::get('/add-to-cart/{id}', [ProductController::class, 'addtocart'])->name('addtocart');
    Route::get('/cart', [CartController::class, 'cart'])->name('cart');
    Route::post('/cart/{id}', [CartController::class, 'cartPost']);
    Route::post('/delete/{id}', [CartController::class, 'destroy']);
    Route::get('/checkout', [CartController::class, 'checkout']);
    Route::post('/orderplaced', [CartController::class, 'order']);
    Route::get('/category/{id}', [CartController::class, 'categoryproducts']);
    Route::get('/product/{id}', [ProductController::class, 'products']);
    Route::post('/product/{id}',[ProductController::class, 'productspost'])->name('productspost');
    // Route::get('single-charge', [CartController::class, 'singlecharge'])->name('single.charge');

    Route::middleware(['auth:sanctum', 'verified'])->get('/charge', function () {
        return view('charge');
    })->name('charge');

    Route::middleware(['auth:sanctum', 'verified'])->post('/charge', [OrderController::class, 'orderplaced'])->name('charge.post');

    Route::post('/place-order', [OrderController::class, 'placeOrder'])->name('order.post');

});

Route::group(['middleware' => 'admin'], function () {
    Route::get('/admin', [ProductController::class, 'index'])->name('index');
    Route::get('/products/{id}/edit', [ProductController::class, 'edit']);
    Route::put('/products/{id}/update', [ProductController::class, 'update']);
    Route::get('/products/{id}/delete', [ProductController::class, 'destroy']);
    Route::get('/products/create', [ProductController::class, 'create']);
    Route::post('/products/store', [ProductController::class, 'store']);
    Route::get('/products/category', [CartController::class, 'view']);
    Route::post('/category/store', [CartController::class, 'store'])->name('category.post');
    Route::get('/categories', [CartController::class, 'category']);
    Route::get('/category/{id}/delete', [CartController::class, 'categorydestroy']);
    Route::get('/orders',[OrderController::class, 'orders']);
    Route::get('/orders/view/{order}',[OrderController::class, 'vieworders']);
    Route::post('/orders/view/{order}',[OrderController::class, 'status'])->name('status');
    Route::get('/print-invoice/{order}', [OrderController::class, 'printinvoice' ])->name('invoice');
    Route::get('/search', [OrderController::class, 'search']);
});
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
