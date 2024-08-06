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
    public function signIn(){
        if(Auth::check()){
            return view('auth.sellerSignup');
        }
else 
return redirect()->route('signin')->with(['message'=> 'login first to become seller ']);
    }

    public function addProductView(){

        $categories = Category::all();
        $products = Products::find(1);
        $columns = DB::select('SHOW COLUMNS FROM products');
        return view('addProduct',compact('categories','products','columns'));
    }


   
    public function addProduct(Request $request)
{
    // Get the authenticated user
    $user = Auth::user();

    // Validate the request data
    $validatedData = $request->validate([
        'category' => 'required|string|max:255',
        'name' => 'required|string|max:255',
        'price' => 'required|numeric',
        'stock' => 'required|integer',
        'description' => 'nullable|string',
        'details.*.key' => 'required|string|max:255',
        'details.*.value' => 'required|string|max:255',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    // Check if the category exists
    $category = Category::where('category', $validatedData['category'])->first();

    // If the category doesn't exist, create a new one
    if (!$category) {
        $category = Category::create(['category' => $validatedData['category']]);
    }

    // Create a new product instance
    $product = new Products();
    $product->category = $category->id; // Use the ID of the existing or newly created category
    $product->user = Auth::id(); // Auth::id() returns the authenticated user's ID
    $product->name = $validatedData['name'];
    $product->price = $validatedData['price'];
    $product->stock = $validatedData['stock'];
    $product->description = $validatedData['description'];

    // Convert details array to JSON format
    $details = [];
    foreach ($validatedData['details'] as $detail) {
        $details[] = [
            'key' => $detail['key'],
            'value' => $detail['value'],
        ];
    }
    $product->details = json_encode($details);

    // Handle file upload
    if ($request->hasFile('image')) {
        $image = $request->file('image');
        // Generate a unique file name
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $imagePath = $image->storeAs('products', $imageName, 'public');
        $product->image = $imagePath;
    }

    // Save the product to the database
    $product->save();

    // Redirect with a success message or return to the view
    return redirect('/sellerPage')->with('success', 'Product added successfully!');
}

    

    public function getUserProducts($userId)
    {
        $user = User::find($userId);
        $products = $user->product;
        // return view('dis',compact('products'));
        return view('seller', ['products' => $products]);
      
    }
    public function sellerView()
    {
        // Fetch the currently authenticated user
        $user = Auth::user();
        
        // Get the user's associated products
        $products = $user->products;
    
        // Check if the user's role is not 'seller'
        if ($user->role != 'seller') {
            // Update the user's role to 'seller'
            $user->update([
                'role' => 'seller'
            ]);
        }
    
        // Pass user and products to the view
        return view('seller', compact('user', 'products'));
    }
    
    public function displayTotalProduct(){
        $user = Auth::user()->id; // Get the authenticated user's ID
        $items = Products::where('user', $user)->get(); // Retrieve products associated with the user
        return view('seller-total-product-view', compact('items')); // Pass the products to the view
    }
    public function update($id){
        $product = Products::find($id);
        return view('seller-single-product-view',compact('product')); // Pass the products to the view
    }
    public function updateStore(Request $request, $productId) {
        $validatedData = $request->validate([
            'category' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'description' => 'nullable|string',
            'details.*.key' => 'required|string|max:255',
            'details.*.value' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Changed to nullable
        ]);
    
        try {
            $category = Category::where('category', $validatedData['category'])->first();
            
            // If the category doesn't exist, create a new one
            if (!$category) {
                $category = Category::create(['category' => $validatedData['category']]);
            }
    
            // Retrieve the existing product
            $product = Products::findOrFail($productId); // Find product by ID, or fail if not found
    
            // Update product attributes
            $product->category = $category->id; // Use the ID of the existing or newly created category
            $product->user = Auth::id(); // Auth::id() returns the authenticated user's ID
            $product->name = $validatedData['name'];
            $product->price = $validatedData['price'];
            $product->stock = $validatedData['stock'];
            $product->description = $validatedData['description'];
    
            // Convert details array to JSON format
            $details = [];
            foreach ($validatedData['details'] as $detail) {
                $details[] = [
                    'key' => $detail['key'],
                    'value' => $detail['value'],
                ];
            }
            $product->details = json_encode($details);
    
            // Handle file upload if a new image is provided
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                // Generate a unique file name
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $imagePath = $image->storeAs('products', $imageName, 'public');
                $product->image = $imagePath;
            }
    
            // Save the updated product
            $product->save();
    
            return redirect()->back()->with('success', 'Product updated successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'There was an error updating the product: ' . $e->getMessage());
        }
    }
    
    
    
}