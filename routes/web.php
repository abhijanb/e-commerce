<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\Store;
use App\Http\Middleware\CheckMiddleware;
use App\Models\Products;
use Illuminate\Support\Facades\Route;

Route::get('/index', function () {

    return view('index');});

Route::get('/test', function () {

    return view('test');});

Route::get('/', function () {
    $products = Products::all();
    return view('welcome',compact('products'));
})->name('dash')->middleware(CheckMiddleware::class);

Route::get('/signup', [AuthController::class, 'showSignupForm'])->name('signup.form');
Route::post('/signup', [AuthController::class, 'signupStore'])->name('signup.store');
Route::get('/signin',[AuthController::class,'showLoginForm']);
Route::post('/signin',[AuthController::class,'login']);

// Route::post('/sellerView',[AuthController::class,'sellerView']);

Route::get('/seller',[SellerController::class,'signIn']);
Route::post('/seller',[AuthController::class,'sellerView']);
Route::get('/add-product',[SellerController::class,'addProductView']);
Route::post('/add-product',[SellerController::class,'addProduct']);

Route::post('/cart/add/{product}', function(){
    return "abhijan";
})->name('cart.add');
Route::post('/wishlist/add/{product}', function(){
    return "abhijan";
})->name('wishlist.add');


Route::get('/cart', function(){
    return view('cart');});
