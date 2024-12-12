<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MascotaController;
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
Route::apiResource('mascotas', MascotaController::class);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/hola-mundo', function () {
    return response()->json([
        'mensaje' => 'Hola Mundo',
        'estudiantes' => ['Santiago Londoño Giraldo', 'Wilson Alexander Muñoz Cardenas']
    ]);
});
