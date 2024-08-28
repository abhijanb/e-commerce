<?php

use App\Http\Controllers\API\DashViewController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('allProudct',[DashViewController::class,'index']);
// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');
