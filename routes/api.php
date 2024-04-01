<?php

use App\Http\Controllers\CitasController;
use App\Http\Controllers\DiasController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\UsuariosController;
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

Route::post('/login', [UsuariosController::class, 'login']);

Route::get('/usuarios',[UsuariosController::class, 'index']);
Route::get('/usuarios/{id}',[UsuariosController::class, 'show']);
Route::post('/usuarios',[UsuariosController::class, 'store']);
Route::put('/usuarios/{id}',[UsuariosController::class, 'update']);
Route::delete('/usuarios/{id}',[UsuariosController::class, 'destroy']);

Route::get('/citas',[CitasController::class, 'index']);
Route::get('/citas/{id}',[CitasController::class, 'show']);
Route::post('/citas',[CitasController::class, 'store']);
Route::put('/citas/{id}',[CitasController::class, 'update']);
Route::delete('/citas/{id}',[CitasController::class, 'destroy']);

Route::get('/roles',[RolesController::class, 'index']);
Route::get('/roles/{id}',[RolesController::class, 'show']);
Route::post('/roles',[RolesController::class, 'store']);
Route::put('/roles/{id}',[RolesController::class, 'update']);
Route::delete('/roles/{id}',[RolesController::class, 'destroy']);

Route::get('/dias',[DiasController::class, 'create']);
