<?php

use App\Http\Controllers\API\UsuarioController;
use App\Http\Controllers\API\ArticuloController;
use App\Http\Controllers\API\ImagenController;
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

Route::apiResources([
    'usuarios' => UsuarioController::class,
]);

Route::apiResources([
    'articulos' => ArticuloController::class,
]);

Route::post('articulos', [ArticuloController::class, 'store']);
Route::get('articulos/{articulo}', [ArticuloController::class, 'show']);
Route::put('articulos/{articulo}', [ArticuloController::class, 'update']);
Route::delete('articulos/{articulo}', [ArticuloController::class, 'destroy']);

Route::get('imagenes',[ImagenController::class, 'index']);