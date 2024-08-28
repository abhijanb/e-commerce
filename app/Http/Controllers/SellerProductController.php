<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class SellerProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
    
        // Join products with categories
        $items = Products::where('user_id', $user->id)
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->select('products.*', 'categories.category as category_name')
            ->get();
    
        return view('seller-total-product-view', compact('items'));
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $userId = Auth::id();
        $categories = Category::all();
        $products = Products::find($userId);
        $columns = DB::select('SHOW COLUMNS FROM products');
        return view('addProduct',compact('categories','products','columns'));
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    // Validate the incoming request data
    $validatedData = $request->validate([
        'category' => 'required|string|max:255',
        'name' => 'required|string|max:255',
        'price' => 'required|numeric',
        'stock' => 'required|integer',
        'description' => 'nullable|string',
        'coupons' => 'nullable|string',
        'details.*.key' => 'required|string|max:255',
        'details.*.value' => 'required|string|max:255',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    // Check if the category exists or create a new one
    $category = Category::firstOrCreate(['category' => $validatedData['category']]);

    // Create a new product instance
    $product = new Products();
    $product->category_id = $category->id; // Use the ID of the existing or newly created category
    $product->user_id = Auth::id(); // Get the authenticated user's ID
    $product->name = $validatedData['name'];
    $product->price = $validatedData['price'];
    $product->coupons = $validatedData['coupons'] ?? "";
    $product->stock = $validatedData['stock'];
    $product->description = $validatedData['description'];

    // Convert details array to JSON format
    $details = array_map(function ($detail) {
        return [$detail['key'] => $detail['value']];
    }, $validatedData['details']);
    $product->details = json_encode($details);

    // Handle file upload
    if ($request->hasFile('image')) {
        $image = $request->file('image');
        // Generate a unique file name
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        // Store the file
        $imagePath = $image->storeAs('products', $imageName, 'public');
        $product->image = $imagePath;
    }

    // Save the product to the database
    $product->save();

    // Redirect with a success message
    return redirect('/sellerProductAdd')->with('success', 'Product added successfully!');
}


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        return "abhijan.show";

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $product = Products::find($id);
        return view('seller-single-product-view',compact('product'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'coupons' => 'nullable|string|min:5|max:8',
            'details.*.key' => 'required|string|max:255',
            'details.*.value' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        // Check if the category exists
    
        // If the category doesn't exist, create a new one
       
    
        // Create a new product instance
        $product = Products::where('id',$id)->first();
        $product->user = Auth::id(); // Auth::id() returns the authenticated user's ID
        $product->name = $validatedData['name'];
        $product->coupons = $validatedData['coupons'];
        $product->price = $validatedData['price'];
        $product->stock = $validatedData['stock'];
    
        // Convert details array to JSON format
        $details = [];
        foreach ($validatedData['details'] as $detail) {
            $details[] = [
                $detail['key'] => $detail['value'],
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
        return redirect('sellerProductAdd');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $product = Products::where('id',$id)->first();
        if ($product->image) {
            Storage::disk('public')->delete($product->image);
        }
        $product->delete();
        return redirect("sellerProductAdd");
    }
}
