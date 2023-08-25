<?php

use App\Http\Controllers\API\UsuarioController;
use App\Http\Controllers\AutenticarController;
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

Route::post('registro', [AutenticarController::class, 'registro']);

Route::post('login', [AutenticarController::class, 'accederCuenta']);

Route::post('logout', [AutenticarController::class, 'cerrarSesion']);