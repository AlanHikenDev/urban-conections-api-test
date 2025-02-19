<?php

namespace App\Http\Controllers;

use App\Models\CartItems;
use App\Http\Requests\StoreCartItemsRequest;
use App\Http\Requests\UpdateCartItemsRequest;

class CartItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCartItemsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(CartItems $cartItems)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CartItems $cartItems)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCartItemsRequest $request, CartItems $cartItems)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CartItems $cartItems)
    {
        //
    }
}
