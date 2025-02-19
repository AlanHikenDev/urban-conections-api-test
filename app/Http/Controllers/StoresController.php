<?php

namespace App\Http\Controllers;

use App\Models\stores;
use App\Http\Requests\StorestoresRequest;
use App\Http\Requests\UpdatestoresRequest;

class StoresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return stores::all();
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
    public function store(StorestoresRequest $request)
    {
        //
        $store = Stores::create([
            'name' => $request->name,
            'seller_id'=> $request->seller_id
        ]);

        return $store;
    }

    /**
     * Display the specified resource.
     */
    public function show(stores $stores)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(stores $stores)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatestoresRequest $request, stores $store)
    {
        //
        $validatedData = $request->validated();

        // Actualizar el vendedor
        $store->update($validatedData);

        // Respuesta
        return response()->json([
            'message' => 'Vendedor actualizado correctamente',
            'data' => $store,
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(stores $store)
    {
        //
        if($store->delete()) {

            return response()->json([
                'message' => 'Tienda '.$store->id.' eliminado correctamente',
            ], 200);
        }

    }
}
