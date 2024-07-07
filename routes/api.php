<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::post('/auth-user', [App\Http\Controllers\Auth\LoginController::class, 'auth']);


Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:sanctum')->group(function () {
    
    Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout']);



    
    Route::get('/get-users', [App\Http\Controllers\UserController::class, 'getUsers']);
    
});



Route::get('/tokens/create', function (Request $request) {

    $token = $request->user()->createToken($request->token_name);
 
    return ['token' => $token->plainTextToken];
});


Route::get('/hello', function(){
    return 'heelo';
});