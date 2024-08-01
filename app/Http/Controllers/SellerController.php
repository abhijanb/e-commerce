<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Category;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class SellerController extends Controller
{
    //
    public function signIn(){
        return view('auth.sellerSignup');

    }

    public function addProductView(){
        $categorys = Category::all();
        $products = Products::find(1);
        $columns = DB::select('SHOW COLUMNS FROM products');
        return view('addProduct',compact('categorys','products','columns'));
    }


   
    public function addProduct(Request $request)
{
    // Validate the request data
    $validatedData = $request->validate([
        'category' => 'required|exists:categories,id',
        'name' => 'required|string|max:255',
        'price' => 'required|numeric',
        'stock' => 'required|integer',
        'description' => 'nullable|string',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048' // Image is required
    ]);

    // Create a new product instance
    $product = new Products();
    $product->category = $validatedData['category'];
    $product->user = Auth::id(); // Ensure that Auth::id() returns the authenticated user's ID
    $product->name = $validatedData['name'];
    $product->price = $validatedData['price'];
    $product->stock = $validatedData['stock'];
    $product->description = $validatedData['description'];

    // Handle file upload
    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imagePath = $image->storeAs('products', 'abhijan.jpg', 'public');
        $product->image = $imagePath;
    }

    // Save the product to the databasea
    $product->save();

    // Redirect with a success message
    return redirect('/sellerView');
}


    public function getUserProducts($userId)
    {
        $user = User::find($userId);
        $products = $user->product;
        // return view('dis',compact('products'));
        return view('seller', ['products' => $products]);
      
    }
    public function dis(){
        dd($_SERVER);
        
    }
}
