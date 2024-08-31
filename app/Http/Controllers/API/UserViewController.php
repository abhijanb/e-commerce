<?php

namespace App\Http\Controllers\Api;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\ResponseController;

class UserViewController extends ResponseController
{
    //
    public function DashView(){
        $products = Product::join('categories', 'products.category_id', '=', 'categories.id')
        ->select('products.*', 'categories.category as category_name')
        ->get();
        return $this->successResponse($products);
        }
    
        public function searchProduct(Request $request,$product){
            $search = $product;
            $products = Product::where('name', 'like', '%' . $search . '%')->get();
            if($products->isEmpty()){
                return $this->successResponse("failed to get");
            }
                        return $this->successResponse($products);
        }
    
        
}
