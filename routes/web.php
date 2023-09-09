<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Auth\AuthController;

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

Route::group(['middleware' => 'guest'],function() {
    Route::get('/register', [AuthController::class,'Register']);
    Route::post('/register', [AuthController::class,'RegisterPost']);
    Route::get('/login', [AuthController::class,'login'])->name('login');
    Route::post('/login', [AuthController::class,'loginPost']);
});


Route::group(['middleware' => 'auth'],function() {
    Route::get('/', [ProductController::class,'index'])->name('index');
    Route::get('/products/{id}/edit',[ProductController::class,'edit']);
    Route::put('/products/{id}/update',[ProductController::class,'update']);
    Route::get('/products/{id}/delete',[ProductController::class,'destroy']);
});

Route::group(['middleware' => 'admin'],function(){
    Route::get('/products/create', [ProductController::class,'create']);
    Route::post('/products/store', [ProductController::class,'store']);
});
Route::post('/logout',[AuthController::class,'logout'])->name('logout');