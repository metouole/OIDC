<?php

use http\Client\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



// Routes added by AuthleteAuthorizationServerCommand.
Route::get('/.well-known/openid-configuration', '\App\Http\Controllers\Authlete\ConfigurationController');
Route::get('/authorization', '\App\Http\Controllers\Authlete\AuthorizationController');
Route::post('/authorization', '\App\Http\Controllers\Authlete\AuthorizationController');
Route::post('/authorization/decision', '\App\Http\Controllers\Authlete\AuthorizationDecisionController');
