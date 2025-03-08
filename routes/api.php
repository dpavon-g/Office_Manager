<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OficinasController;
use App\Http\Controllers\EmpleadosController;
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

Route::post('/createOffice', [OficinasController::class, 'create'])->name('createOffice');

Route::post('/createUser', [EmpleadosController::class, 'create'])->name('createUser');

Route::post('/editUser/{userId}', [EmpleadosController::class, 'edit'])->name('editUser');

Route::delete('/delOficina/{idOficina}', [OficinasController::class, 'destroy'])->name('delOficina');