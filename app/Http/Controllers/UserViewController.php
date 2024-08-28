<?php

namespace App\Http\Controllers;

use App\Models\Carts;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserViewController extends Controller
{
    //
    public function DashView(){
    $products = Product::join('categories', 'products.category_id', '=', 'categories.id')
    ->select('products.*', 'categories.category as category_name')
    ->get();
    return view('welcome',compact('products'));
    }

    public function viewSearch(Request $request){
        $search = $request->input('search');
        $products = Product::where('name', 'like', '%' . $search . '%')->get();
        return view('searchProduct',['products' => $products]);
    }

    public function addToCart(Request $request, $id){
        $user = Auth::user()->id;
        $existingProduct = Carts::where('user', $user)
                                ->where('products', $id)
                                ->first();
                                $productsId = $id;
        $products = Carts::where('products',$id)->get();
        if(!$existingProduct){
            Carts::create([
                'user' => $user,
                'products' => $productsId,
                'quantity' => 1
            ]);
        }
        else {
            $quantity = $products->quantity;
            $products->update([
                'quantity' => $quantity + 1,
            ]);
        }
        return view('cart',compact('products'));

    }
   
    
}
