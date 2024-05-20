<?php

use App\Http\Controllers\API\V1\ApotikController;
use App\Http\Controllers\API\V1\ObatController;
use App\Http\Controllers\API\V1\StokController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::controller(ObatController::class)->group(function() {
    Route::get('/drugs', 'index');
    Route::get('/drugs/{id}', 'show');
    Route::post('/drugs', 'store'); // Need admin auth
    Route::post('/drugs/{id}', 'update'); // Need admin auth
    Route::delete('/drugs/{id}', 'destroy'); // Need admin auth
});

Route::controller(ApotikController::class)->group(function() {
    Route::get('/pharmacies', 'index');
    Route::get('/pharmacies/{id}', 'show');
    Route::post('/pharmacies', 'store'); // Need admin auth
    Route::post('/pharmacies/{id}', 'update'); // Need admin auth
    Route::delete('/pharmacies/{id}', 'destroy'); // Need admin auth
});

Route::controller(StokController::class)->group(function() {
    Route::get('/stock', 'index');
    Route::get('/stock/{id}', 'show');
    Route::post('/stock/add/{id}', 'add'); // Need admin or pharmacies auth
    Route::post('/stock/reduce/{id}', 'reduce'); // Need admin or pharmacies auth
    Route::delete('/stock/{id}', 'destroy'); // Need admin or pharmacies auth
});