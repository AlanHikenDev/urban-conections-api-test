<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SellersController;
use App\Http\Controllers\StoresController;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

///
Route::post('/sellers/store', [SellersController::class, 'store'])->name('sellers.store');
Route::get('/sellers', [SellersController::class, 'index'])->name('sellers');
Route::delete('/sellers/delete/{seller}', [SellersController::class, 'destroy'])->name('sellers.delete');
Route::put('/sellers/update/{seller}', [SellersController::class, 'update'])->name('sellers.update');

// crud de productos 
Route::post('/stores/store', [StoresController::class, 'store'])->name('stores.store');
Route::get('/stores', [StoresController::class, 'index'])->name('stores');
Route::delete('/stores/delete/{store}', [StoresController::class, 'destroy'])->name('stores.delete');
Route::put('/stores/update/{store}', [StoresController::class, 'update'])->name('stores.update');
