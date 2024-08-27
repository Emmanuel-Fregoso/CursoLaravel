<?php

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
    return view('welcome');
});

Route::get('/holamundo/{nombre}', function ($nombre){
    return view('prueba', compact('nombre'));
});

Route::get('/otra', function (){
    return 'Otra ruta';
})->name('otra');
