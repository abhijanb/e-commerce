<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductSearchController extends Controller
{
    //
    public function viewSearch(Request $request){
        $search = $request->input('search');
        $products = Product::where('name', 'like', '%' . $search . '%')
        ->orWhere('category_id', 'like', '%' . $search . '%')
        ->get();
return view('searchProduct',['products' => $products]);
    }
}
