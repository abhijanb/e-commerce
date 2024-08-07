<?php

use App\Http\Controllers\Store;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductSearchController;
use App\Http\Controllers\SellerAuthController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\SellerProductController;
use App\Http\Controllers\UserViewController;
use App\Http\Middleware\CheckSellerOrNot;
use App\Http\Middleware\UserOrNot;
use App\Models\Products;
use Symfony\Component\VarDumper\VarDumper;

// Dashboard view
Route::get('/', [UserViewController::class,'DashView'])->name('dash');
// login form
Route::get('/signin',[AuthController::class,'showLoginForm'])->name('signin');
// login validation
Route::post('/signin',[AuthController::class,'login']);
// // signup form
Route::get('/signup', [AuthController::class, 'showSignupForm'])->name('signup.form');
// // signup store also login and return to dashboard
Route::post('/signup', [AuthController::class, 'signupStore'])->name('signup.store');
// // seller signin 
Route::get('/sellerLogin',[SellerController::class,'signIn']);
// // // seller view
Route::post('/sellerLogin',[SellerController::class,'sellerView']);
// seller dash page
Route::get('sellerPage',[SellerController::class,'sellerDashPage'])->middleware(UserOrNot::class,CheckSellerOrNot::class);
Route::post('sellerPage',[SellerController::class,'sellerView']);
// // seller add 
Route::resource('sellerProductAdd', SellerProductController::class);
Route::get('/profile',function(){
  Auth::logout();
});

Route::get('searchproduct',[ProductSearchController::class,'viewSearch']);