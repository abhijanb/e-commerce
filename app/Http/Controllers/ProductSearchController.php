<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductSearchController extends Controller
{
    //
    public function viewSearch(Request $request){
        $search = $request->input('search');
        $products = Products::where('name', 'like', '%' . $search . '%')
        ->orWhere('category', 'like', '%' . $search . '%')
        ->get();
return view('searchProduct',['products' => $products]);
    }
}
