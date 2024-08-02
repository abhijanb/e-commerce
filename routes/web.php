<?php

use App\Http\Controllers\Store;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\UserViewController;
// Dashboard view
Route::get('/', [UserViewController::class,'DashView'])->name('dash');
// login form
Route::get('/signin',[AuthController::class,'showLoginForm'])->name('signin');
// login validation
Route::post('/signin',[AuthController::class,'login']);
// signup form
Route::get('/signup', [AuthController::class, 'showSignupForm'])->name('signup.form');
// signup store also login and return to dashboard
Route::post('/signup', [AuthController::class, 'signupStore'])->name('signup.store');
// seller signin 
Route::get('/seller',[SellerController::class,'signIn']);
// seller view
Route::post('/seller',[SellerController::class,'sellerView']);
// seller add product
Route::get('/add-product',[SellerController::class,'addProductView']);
// seller store product in db
Route::post('/add-product',[SellerController::class,'addProduct']);
// test cart design
Route::get('/cart', function(){
    return view('cart');});
// anazon clone for reference
Route::get('/index', function () {
    return view('index');});
// test page 
Route::get('/test', function () {
    return view('test');});
// test 
Route::get('/profile',function(){
  Auth::logout();
  return view('welcome');
});