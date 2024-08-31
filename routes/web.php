<?php

use App\Models\User;
use App\Http\Controllers\Store;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\AuthController;
// use App\Http\Controllers\CartController;
// use App\Http\Controllers\TestController;
// use App\Http\Middleware\CheckSellerOrNot;
// use App\Http\Controllers\SellerController;
// use App\Http\Controllers\CheckoutController;
// use App\Http\Controllers\UserViewController;
// use App\Http\Controllers\SellerAuthController;
// use App\Http\Controllers\ProductSearchController;
// use App\Http\Controllers\SellerProductController;

// Dashboard view
// Route::get('/', [UserViewController::class,'DashView'])->name('dash');
// // login form
// Route::get('/signin',[AuthController::class,'showLoginForm'])->name('signin');
// // login validation
// Route::post('/signin',[AuthController::class,'login'])->name('login');
// // // signup form
// Route::get('/signup', [AuthController::class, 'showSignupForm'])->name('signup.form');
// // // signup store also login and return to dashboard
// Route::post('/signup', [AuthController::class, 'signupStore'])->name('signup.store');
// // // seller signin 
// Route::get('/sellerLogin',[SellerController::class,'signIn']);
// // // // seller view
// Route::post('/sellerLogin',[SellerController::class,'sellerView']);
// // seller dash page
// Route::get('sellerPage',[SellerController::class,'sellerDashPage'])->middleware('auth',CheckSellerOrNot::class);
// Route::post('sellerPage',[SellerController::class,'sellerView']);
// // // seller add 
// Route::resource('sellerProductAdd', SellerProductController::class);
// Route::get('/profile',function(){
//   Auth::logout();
//   return redirect('/');
// });

// Route::get('searchproduct',[ProductSearchController::class,'viewSearch']);
// Route::resource('carts',CartController::class)->middleware('auth');
// Route::resource('checkout',CheckoutController::class)->middleware('auth');

// // Route::view('/test','testing');
// Route::view('/test1','test1');
// Route::view('/test2','test2');
// Route::view('/test3','test3');
// Route::view('/test4','test4');
// Route::get('/use',function(){
//   User::factory()->count(10)->create();
// });
// Route::resource('buy',TestController::class);