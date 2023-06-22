<?php

use Illuminate\Support\Facades\Auth;
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
    return view('home');
})->name('inicio');
Route::get('conocenos', function () {
    return view('conocenos');
})->name('conocenos');

Route::get('cursos', function () {
    return view('cursos-disponibles');
})->name('cursos');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/idiomas/comprar',  [App\Http\Controllers\IdiomasController::class, 'comprar'])->name('idiomas.comprar');
