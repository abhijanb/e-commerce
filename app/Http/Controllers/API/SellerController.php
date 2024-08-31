<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SellerController extends Controller
{
    //
    public function sellerDashPage(){
        $user = Auth::user();
       $products = $user->products()->get();
    //    dd($products);
        // $products = Products::where('user_id',Auth::id())->get();
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
