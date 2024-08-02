<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class UserViewController extends Controller
{
    //
    public function DashView(){
    $products = Products::all();
    return view('welcome',compact('products'));
    }
}
