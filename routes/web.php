<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


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

Route::middleware("auth")
    ->group(function () {
        Route::post('/pago', [App\Http\Controllers\IdiomasController::class, 'pago'])->name('pago');
        Route::post('/idiomas/comprar',  [App\Http\Controllers\IdiomasController::class, 'comprar'])->name('idiomas.comprar');
        Route::get('/my-curso', [\App\Http\Controllers\CursosController::class, 'getCursosByUser'])->name('my-curso');
        Route::get('/curso-clases/{id}', [\App\Http\Controllers\CursosController::class, 'getCursoById'])->name('curso-clases');
        Route::get('/correo', [App\Http\Controllers\IdiomasController::class, 'correo'])->name('correo');
    });
