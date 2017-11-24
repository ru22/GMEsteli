<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\estudiantes;
use DB;

class inactivosController extends Controller
{
   public function index(){
           
        $estudiantes=DB::table('estudiantes as e')
        ->select('e.codigo','e.nombrese','apellidose','procedencia','fnac','sexo')
       	->where('estado','=','I')
        ->orderBy('id','asc')
        ->get();

        return view('vistas.inactivos.index',["estudiantes"=>$estudiantes]);
	}

   public function show($id){
     
  }

  public function destroy($id){
    return ('hola');
      $estudiantes=estudiantes::findOrFail($id);
      $estudiantes->estado='A';
      $estudiantes->update();
      return Redirect::to('retirados');

  }
 
	public function listado(){

		 $estudiantes=DB::table('estudiantes as e')
        ->select('e.codigo','e.nombrese','apellidose','procedencia','fnac','sexo')
       	->where('estado','=','A')
        ->orderBy('id','asc')
        ->get();

	} 

}
 