<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use detallematricula;
use App\matriculas;
use App\estudiantes;
use App\grados;
use App\anios;
use App\seccions;
use PDF;
use DB;

class detalleMatriculaController extends Controller
{

	public function lista($anios, $dato=""){  



         $idannio=DB::table('anios')->select('idannios')->orderBy('idannios','Desc')->take(1)->get();

        $matriculas=DB::table('matriculas')
        ->join('estudiantes','estudiantes.id','=','matriculas.idestudiantes')
        ->join('anios','anios.idannios','matriculas.idannios')
        ->join('seccions','seccions.id','=','matriculas.idseccion')
        ->join('grados','grados.id','=','matriculas.idgrados')
        ->select('matriculas.idseccion','estudiantes.codigo','estudiantes.nombrese','estudiantes.apellidose','anios.periodo','seccions.seccion','grados.grado','matriculas.tuno')
         ->where('anios.idannios','=',$idannio[0]->idannios)
        ->get();

            $anios=anios::all();
            $grados=grados::all();
            $seccions=seccions::all();
            $estudiantes=estudiantes::all();
           
   
    return view('vistas.matricula.form.listas')
         ->with("anios",$anios)
         ->with("anios",$anios)
         ->with("grados",$grados)
         ->with("seccions",$seccions)
         ->with("matriculas",$matriculas)
        ->with("estudiantes",$estudiantes);

	}
 
	 public function buscar_est($idannios, $idgrados, $dato=""){


       $matriculas=matriculas::busqueda($idannios,$idgrados,$dato)
        ->join('estudiantes','estudiantes.id','=','matriculas.idestudiantes')
        ->join('anios','anios.idannios','matriculas.idannios')
        ->join('seccions','seccions.id','=','matriculas.idseccion')
        ->join('grados','grados.id','=','matriculas.idgrados')
        ->select('matriculas.idseccion','matriculas.idestudiantes','estudiantes.codigo','estudiantes.nombrese','estudiantes.apellidose','anios.periodo','seccions.seccion','grados.grado','matriculas.tuno')
       ->paginate(25);


/*       $matriculas->each(function($matriculas){
        $matriculas->estudiantes; 
       });*/
       // dd($matriculas);
        $anios=anios::all(); 
        $annios=$anios->find($anios);
        $seccions=seccions::all(); 
        $seccionss=$seccions->find($seccions);
        $grados=grados::all();
        $gradoss=$grados->find($grados);
  
        $estudiantes=estudiantes::all();
        // $estudiantes=$estudiantes->find($estudiantes);

     return view('vistas.matricula.form.listas')
         ->with("anios",$anios)
         ->with("anios",$anios)
         ->with("matriculas",$matriculas)
         ->with("grados",$grados)
         ->with("grados",$grados)
         ->with("seccions",$seccions) 
         ->with("estudiantes",$estudiantes);

    }

}
