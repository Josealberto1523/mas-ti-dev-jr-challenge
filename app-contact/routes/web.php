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

Route::get('/', function () {
    return view('welcome');
});
//Route::get('api/subir','HomeController@index')->name('subir');//mostrar todos lo registros
Auth::routes();

//Route::get('/api', [App\Http\Controllers\HomeController::class, 'index'])->name('api');
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('api/subir',[App\Http\Controllers\Controller::class, 'sdd'])->name('subir');//mostrar todos lo registros
//Route::get('api/contacto',[App\Http\Controllers\ControllerContact::class, 'Index'])->name('agregar');//mostrar todos lo registros
Route::get('api/buscar',[App\Http\Controllers\Controller::class, 'buscar']);//mostrar todos lo registros
Route::get('api/agregar',[App\Http\Controllers\Controller::class, 'agregar']);//mostrar todos lo registros
Route::get('api/borrar',[App\Http\Controllers\Controller::class, 'borrar']);//mostrar todos lo registros