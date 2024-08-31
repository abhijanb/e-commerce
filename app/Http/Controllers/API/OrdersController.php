<?php

namespace App\Http\Controllers\Api;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\OrdersRequest;
use App\Http\Controllers\ResponseController;

class OrdersController extends ResponseController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Code to list orders
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Code to show create form (usually for web, not API)
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(OrdersRequest $request)
    {
        // Validate request data
       

        // Create a new Order
        $store = Order::create([
            'user_id' => $request->user_id,
            'products_id' => $request->products_id,
            'quantity' => $request->quantity,
            'paied' => $request->paied,
        ]);

        // Return response
        return $this->successResponse($store,'success');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Code to show a single order
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Code to show edit form (usually for web, not API)
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Code to update an order
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Code to delete an order
    }
}
