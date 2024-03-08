<?php

use App\Http\Controllers\AirlineController;
use App\Http\Controllers\BejegyzesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TravelController;
use App\Http\Controllers\FlightController;
use App\Http\Controllers\OsztalyController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();

});

Route::middleware('auth.basic')->group(function () {

});



Route::get('bejegyzes', [BejegyzesController::class, 'index']);
Route::get('bejegyzes/osztaly/{id}', [OsztalyController::class, 'show']);
Route::post('bejegyzes', [BejegyzesController::class, 'store']);





