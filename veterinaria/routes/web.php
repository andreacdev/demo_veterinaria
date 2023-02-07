<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\citasController;
use App\Http\Controllers\clientesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/veterinaria', function () {
    return view('pages.index');
});

Route::get('/veterinaria/clientes', function () {
    return view('pages.clientes');
});

Route::get('/veterinaria/citas', function () {
    return view('pages.citas');
});

Route::post('/veterinaria/clientes', [clientesController::class, 'store'])->name('clientes');

Route::post('/veterinaria/citas', [citasController::class, 'store'])->name('citas');


