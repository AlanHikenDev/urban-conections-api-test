<?php

namespace App\Http\Controllers;

use App\Models\Sellers;
use App\Http\Requests\StoreSellersRequest;
use App\Http\Requests\UpdateSellersRequest;

class SellersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $sellers = Sellers::all();
        return $sellers;
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
    public function store(StoreSellersRequest $request)
    {
        //
        $seller = Sellers::create([
            'name' => $request->name,
            'email'=> $request->email
        ]);

        return $seller;
    }

    /**
     * Display the specified resource.
     */
    public function show(Sellers $sellers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sellers $sellers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSellersRequest $request, Sellers $seller)
    {
        //
        /* $seller->name = $request->name; 
        $seller->email = $request->email;
        $seller->update(); */

        $validatedData = $request->validated();

        // Actualizar el vendedor
        $seller->update($validatedData);

        // Respuesta
        return response()->json([
            'message' => 'Vendedor actualizado correctamente',
            'data' => $seller,
        ], 200);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sellers $seller)
    {
        //
        if($seller->delete()) {

            return response()->json([
                'message' => 'Vendedor '.$seller->id.' eliminado correctamente',
            ], 200);
        }
    }
}
