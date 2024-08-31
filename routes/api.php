<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\OrdersController;
use App\Http\Controllers\API\DashViewController;
use App\Http\Controllers\Api\UserViewController;

// Route::get('allProudct',[DashViewController::class,'index']);
// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::get('/homepage', [UserViewController::class,'DashView'])->name('dash');
Route::post('/signup',[AuthController::class,'signup']);
Route::post('/login',[AuthController::class,'login']);
Route::get('/searchProduct/{productName}', [UserViewController::class,'searchProduct'])->name('searchProduct')->middleware('auth:sanctum');
Route::post('/addToCart/{productId}', [UserViewController::class,'addToCart'])->name('addToCart')->middleware('auth:sanctum');
Route::delete('/addToCart/{productId}', [UserViewController::class,'removeCartItems'])->middleware('auth:sanctum');
Route::put('/addToCart/{productId}', [UserViewController::class,'updateCartItems'])->middleware('auth:sanctum');
Route::post('/logout',[AuthController::class,'logout']);

Route::post('/hello',[OrdersController::class,'store']);
