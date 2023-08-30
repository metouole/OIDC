<?php

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

// Routes added by AuthleteAuthorizationServerCommand.
Route::get('/jwks', '\App\Http\Controllers\Authlete\JwksController');
Route::post('/revocation', '\App\Http\Controllers\Authlete\RevocationController');
Route::post('/token', '\App\Http\Controllers\Authlete\TokenController');
