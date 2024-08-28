<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
    
        // Eager load products for all cart items
        $cartItems = DB::table('carts')->join('products','carts.products_id','=','products.id')->get();
        // return dd($cartItems);
    
        return view('cart', compact('cartItems'));
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        
        return "create";

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $user = Auth::user();
    
    // Assuming you're using the product ID from the request or form input
    $productId = $request->input('id');
    $carts = Cart::where('products_id',$productId)->get();
    // dd($carts);
    if($carts){

    foreach($carts as $cart){
        if($productId == $cart->products_id){
            // dd($cart->products_id);
            return redirect()->back()->with(['message' => 'already exist']);
        }
        // dd($productId);
        
      
    }}

    Cart::create([
        'user_id' => $user->id,
        'products_id' => $productId,
        'quantity' => 5,
    ]);

// Redirect back with success message
return redirect()->route('carts.index');

    // Get or create a cart for the user

        
}

    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        return "show";

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        return "edit";

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        return "update";

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $products = Cart::where('products_id',$id)->where('user_id',Auth::id())->delete();
        // $products->delete();
        return redirect()->back()->with(['message' => 'successfully deleted']);
        
    }
}
