<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SellersController;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

///
Route::post('/sellers/store', [SellersController::class, 'store'])->name('sellers.store');
Route::get('/sellers', [SellersController::class, 'index'])->name('sellers');
Route::delete('/sellers/delete/{seller}', [SellersController::class, 'destroy'])->name('sellers.delete');
Route::put('/sellers/update/{seller}', [SellersController::class, 'update'])->name('sellers.update');
