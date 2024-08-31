<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CartController extends ResponseController
{
    //
    public function index()
    {

        $user = Auth::user();
        $cartItems = DB::table('carts')
                    ->join('products','carts.products_id','=','products.id')
                    ->get();
        if(!$cartItems)
        {
            return failResponse("no data found",200);
        }
        return successResponse($cartItems,200);

    }
    
    public function create()
    {

        return "create";

    }

    public function store(Request $request, $productId)
    {
        $user = Auth::id();
        // dd($user);
        // $user = 1;
        
        $existingProduct = Cart::where('user_id', $user)
                                ->where('products_id', $productId)
                                ->first();
        if(!$existingProduct){
            Cart::create([
                'user_id' => $user,
                'products_id' => $productId,
                'quantity' => 1
            ]);
            
            return $this->successResponse("product added successfully");
        }
        else {
            $quantity = $existingProduct->quantity;
            $existingProduct->update([
                'quantity' => $quantity + 1,
            ]);
            return $this->successResponse("product already exist");
        }

    }

    public function show(string $productId)
    {
        $CartItem = Product::where('id' , $productId)->first();
        return response()->json($cartItem);

    }

    public function edit(string $id)
    {
        return view('cart.updatePage');
    }

    public function update(Request $request, string $productId)
    {

        $quantity = $request->quantity;

    $validate = Validator::make($request->all(),[
'quantity' => 'required|integer',
    ]);
    if($validate->fails()){
return response()->json([
'error' => 'errror',
]);
    }
$userId = Auth::id();
$quantity = $request->quantity;
$cartProduct = Cart::where('user_id', $userId)
->where('products_id', $productId)
->first();
$cartProduct->update([
'quantity' => $quantity,
]);

return response()->json("successfully ", 200);
   

    }

    public function destroy(string $id)
    {

        $user = Auth::id(); // Get the authenticated user's ID

if (!$user) {
    return $this->failResponse("User not authenticated");
}

$cartItem = Cart::where('user_id', $user)
                ->where('products_id', $productId)
                ->first();

if ($cartItem) {
    $cartItem->delete(); // Remove the item from the cart
    return $this->successResponse("Product removed from cart successfully");
} else {
    return $this->failResponse("Product not found in cart", 404);
}

    }

}
