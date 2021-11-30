<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/contacto','App\Http\Controllers\ControllerContact@index');//mostrar todos lo registros
Route::get('/contacto/{id}','App\Http\Controllers\ControllerContact@show')->name('buscar');//buscar por id
Route::post('/contacto','App\Http\Controllers\ControllerContact@store');//crear un registro
Route::put('/contacto/{id}','App\Http\Controllers\ControllerContact@update')->name('actualizar');//actualizar
Route::put('/update/{id}','App\Http\Controllers\ControllerContact@update');
Route::delete('/contacto/{id}','App\Http\Controllers\ControllerContact@destroy')->name('delete');//borrar
Route::get('/avatar/{id}','App\Http\Controllers\ControllerContact@getAvatar');//obtener avatar
Route::get('/status/{id}','App\Http\Controllers\ControllerContact@deleteData');//borrar cliente cambiar estatus a 0
Route::get('/cambiar/{id}','App\Http\Controllers\ControllerContact@restablecerData');//reactivar cliente cambiar estatus a 1
