<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('home');
});

Route::post('/order', [OrderController::class, 'store']);
Route::get('/order/{code}', [OrderController::class, 'show']);

Route::post('/order-create', [OrderController::class, 'store']);

Route::get('/orders', [OrderController::class, 'getOrders']);

/* GİRİŞ */

Route::get('/login', [AuthController::class, 'showLogin']);
Route::post('/login', [AuthController::class, 'login']);

Route::get('/register', [AuthController::class, 'showRegister']);
Route::post('/register', [AuthController::class, 'register']);

Route::post('/logout', [AuthController::class, 'logout']);

