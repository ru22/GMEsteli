<?php

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
    return view('Auth/login');
});
Auth::routes();
Route::get('/Admin', 'HomeController@index')->name('Panel');

Route::resource('asignaturas','asignaturaController');
Route::resource('ingreso','ingresoController');
Route::resource('matricula','matriculaController');
Route::resource('padres','padrescontroller');
Route::resource('pagos','pagosController');







