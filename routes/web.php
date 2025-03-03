<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OficinasController;

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
    return view('index');
})->name('home');


Route::get('/newOffice', function() {
    return view('oficinas.newOffice');
})->name('newOffice');