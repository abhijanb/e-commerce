<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashViewController extends Controller
{
    //
    public function index()
    {
        $products = Product::all();
    
        if ($products->isEmpty()) {
            return response()->json(['message' => 'No products found'], 404);
        }
        $descriptions = $products->pluck('description');

        return response()->json($descriptions);
    }
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

}
