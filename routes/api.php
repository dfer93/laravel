<?php

use App\Http\Controllers\ArticuloController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/articulos', [ArticuloController::class, 'index']);
Route::get('/articulo/{id}', [ArticuloController::class, 'show']);
Route::put('/articulos', [ArticuloController::class, 'update']);
Route::post('/articulos', [ArticuloController::class, 'store']);
Route::delete('/articulos', [ArticuloController::class, 'destroy']);