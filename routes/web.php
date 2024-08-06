<?php

use App\Http\Controllers\Store;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SellerController;
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
// seller page view
Route::get('/sellerPage',function(){
  $user = Auth::user();
  $products = $user->products;
  return view('seller',compact('products'));
})->middleware(UserOrNot::class,CheckSellerOrNot::class);
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
Route::get('/searchproduct',[UserViewController::class,'viewSearch']);
Route::get('/checkout',function(){
  return view('checkout');
});
Route::get('/productdetails',function(){
  return view('product-details');
});
Route::get('/searchDisplay',function(){
  return view('searchDisplay');
});

Route::get('/add/{id}',[UserViewController::class,'addToCart']);