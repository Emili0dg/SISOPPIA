<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [App\Http\Controllers\Controller::class, 'index']);
Route::get('/historiadewindows', [App\Http\Controllers\Controller::class, 'historia']);
Route::get('/funcionalidaddewindows', [App\Http\Controllers\Controller::class, 'funcionalidades']);
Route::get('/componenteswindows', [App\Http\Controllers\Controller::class, 'componenteswindows']);
Route::get('/usuariowindows', [App\Http\Controllers\Controller::class, 'usuariowindows']);
Route::get('/seguridadwindows', [App\Http\Controllers\Controller::class, 'seguridadwindows']);
Route::get('/compatibilidad', [App\Http\Controllers\Controller::class, 'compatibilidad']);
Route::get('/desarrollos', [App\Http\Controllers\Controller::class, 'desarrollos']);
Route::get('/conclusiones', [App\Http\Controllers\Controller::class, 'conclusiones']);