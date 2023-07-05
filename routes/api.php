<?php

use App\Http\Controllers\Api\RealStateController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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


Route::prefix('v1')->namespace('App\Http\Controllers\Api')->group(function() {
    Route::name('real_states.')->group(function() {

        Route::resource('/real-state', RealStateController::class); //api/v1/real-state/
    });


    Route::name('users.')->group(function() {
        Route::resource('/users', UserController::class); //api/v1/users/
    });
});