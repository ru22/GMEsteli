<?php

use Illuminate\Http\Request;

Route::get('/grados/{id}/seccions','seccionController@bygrados');
Route::get('/periodo/{id}/grados','gradosController@byannios');
Route::get('/grados/{id}/asignaturas','asignaturasController@bygrados');



// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
