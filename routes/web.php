<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MiController;

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
/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', [MiController::class, 'index']);
Route::get('/crear', [MiController::class, 'create']);
Route::get('/articulos', [MiController::class, 'store']);
Route::get('/mostrar', [MiController::class, 'show']);

/* CREACION DE RUTA A NUESRA PLANTILLA */
Route::get('/contacto', [MiController::class, 'contactar']);
Route::get('/gale', [MiController::class, 'galeria']);
