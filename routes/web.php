<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;

Route::get('/', function () {
    return view('home');
});

Route::post('/order', [OrderController::class, 'store']);
Route::get('/order/{code}', [OrderController::class, 'show']);

Route::post('/order-create', [OrderController::class, 'store']);

Route::get('/orders', [OrderController::class, 'getOrders']);