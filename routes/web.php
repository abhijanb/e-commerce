<?php

use App\Http\Controllers\Store;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/seller',function(){
    return view('seller');
});
Route::get('/add-product',function(){
    return view('test');
});
// Route::post('/store',[Store::class,'store']);