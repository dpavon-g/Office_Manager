<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OficinasController;
use App\Http\Controllers\EmpleadosController;

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

Route::get('/', [OficinasController::class, 'index'])->name('home');

Route::get('/oficinas/{idOficina}', [OficinasController::class, 'show'])->name('oficinas');

Route::get('/newOffice', function() {
    return view('oficinas.newOffice');
})->name('newOffice');

Route::get('/newEmpleado/{idOficina}', function($idOficina) {
    return view('empleados.newEmpleado', ['idOficina' => $idOficina]);
})->name('newEmpleado');

Route::get('/getEmpleado/{idEmpleado}', [EmpleadosController::class, 'show'])->name('getEmpleado');

Route::post('/createOffice', [OficinasController::class, 'create'])->name('createOffice');

Route::post('/createUser', [EmpleadosController::class, 'create'])->name('createUser');

Route::post('/editUser/{userId}', [EmpleadosController::class, 'edit'])->name('editUser');

Route::delete('/delOficina/{idOficina}', [OficinasController::class, 'destroy'])->name('delOficina');