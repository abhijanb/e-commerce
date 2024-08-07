<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Category;
use App\Models\Products;
use App\Models\Seller;
use Hamcrest\Type\IsInteger;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class SellerController extends Controller
{
    //
public function sellerDashPage(){
    $user = Auth::user();
   
    $products = Products::where('user',Auth::id())->get();
    return view('seller',compact('products'));
}

    public function signIn(){
        if(Auth::check()){
            return view('auth.sellerSignup');
        }
else 
return redirect()->route('signin')->with(['message'=> 'login first to become seller ']);
    }

 
    public function sellerView()
    {
        // Fetch the currently authenticated user
        $user = Auth::user();
        
        // Get the user's associated products
    
        // Check if the user's role is not 'seller'
        if ($user->role != 'seller') {
            // Update the user's role to 'seller'
            $user->update([
                'role' => 'seller'
            ]);
        }
    
        // Pass user and products to the view
        return redirect('/sellerPage');
    }
    
    
}