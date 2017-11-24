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

Route::get('/reg','RegisterController@index');


Auth::routes();
Route::get('/Admin', 'HomeController@index')->name('Panel');

//Route::resource('register','RegisterController');

Route::resource('asignaturas','asignaturasController');
Route::resource('ingreso','ingresoController');
Route::resource('estudiantes','estudiantesController');
Route::resource('retirados','alumnosInactivosController'); 
Route::resource('matricula','matriculaController');
Route::resource('padres','padrescontroller');
Route::resource('pagos','pagosController');
Route::resource('periodo','aniosController');
Route::resource('maestros','maestrosController');
Route::resource('recibo','recibosController');
Route::resource('nota','NotashController');
Route::resource('recivo','RecivopController');
Route::resource('rv','RvController');
Route::resource('estado','EstadoestConctroller');
Route::resource('seccion','seccionController');
Route::resource('grados','gradosController'); 
Route::resource('grupos','asignargrupoController'); 
Route::resource('producto','ProductoController');
Route::resource('venta','VentaController');
Route::resource('nuevo','NuevopController');
Route::resource('compra','IngresoproductoController'); 

Route::resource('asignacion','asignargrupoController');  



Route::get('listado','listaestController@lista_est'); //ruta para las listas de estudiantes de cada annio 

Route::get('buscar_grado/{anios}/{dato?}','gradosController@buscar_grado'); //ruta de busueda...

Route::get('perfil/{id}','matriculaController@perfil'); //ruta perfil de estudiante....

Route::get('lista','detalleMatriculaController@index');

Route::get('buscar_est/{anios}/{grados}/{seccion}/{dato?}','detalleMatriculaController@buscar_est'); // lista de estudiantes matriculados

Route::get('buscar_grupo/{anios}/{grados}/{seccion}/{dato?}','notasController@buscar_grupo'); // lista de estudiantes por grupos para las notas


Route::get('buscar_nota/{grados}/{asignaturas}/{seccion}','notasController@selectGrados'); // lista de estudiantes de cada tutor


Route::resource('notas','notasController');

// calificaciones
Route::get('calificaciones','notasController@index');
Route::get('listado','notasController@listado');
Route::get('listado/{id}','notasController@show');

// perfil del estudiante 
Route::resource('perfil','perfilContrroller');
Route::get('/select/grados/{id}','perfilContrroller@selectGrados'); 

// filtro de pago de aranceles 
Route::get('/select/estado/{seccion}/{grado}','EstadoestConctroller@selectGrado'); 