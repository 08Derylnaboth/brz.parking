<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::middleware(['internal'])->group(function () {
    Route::get('garages', [GarageController::class, 'index']);
    Route::get('garages/{garage}/spots',[SpotController::class,'index']);
});
        
Route::middleware(['auth:sanctum'])->group(function () {
    Route::post('reservations', [ReservationController::class, 'store']);
    Route::patch('reservations/{reservation}', [ReservationController::class, 'update']);
    Route::delete('reservations/{reservation}', [ReservationController::class, 'destroy']);
});