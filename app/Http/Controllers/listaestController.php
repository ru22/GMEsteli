<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\matriculas;
use App\estudiantes;
use App\anios;
use App\seccions;
use App\grados;
use DB;
use PDF;


class listaestController extends Controller
{

	public function lista_est(){

		// $matriculas=DB::table('matriculas')
  //       ->join('estudiantes','estudiantes.idestudiantes','=','matriculas.idestudiantes')
  //       ->join('anios','anios.idannios','matriculas.idannios')
  //       ->join('seccions','seccions.idseccion','=','matriculas.idseccion')
  //       ->join('grados','grados.idgrados','=','matriculas.idgrados')
  //       ->select('matriculas.idseccion','matriculas.idestudiantes','estudiantes.nombrese','estudiantes.apellidose','anios.periodo','seccions.seccion','grados.grado','matriculas.tuno')
  //      ->paginate(25);

  //      $matriculas->each(function($matriculas){
  //       $matriculas->estudiantes; 
  //      });
  //      // dd($matriculas);  
  //       $anios=anios::all(); 
  //       $annios=$anios->find($anios);
  //       $seccions=seccions::all(); 
  //       $seccionss=$seccions->find($seccions);
  //       $grados=grados::all();
  //       $gradoss=$grados->find($grados);
   
  //       $estudiantes=estudiantes::all();
  //       $estudiantes=$estudiantes->find($estudiantes);

        $pdf = PDF::loadView('vistas.matricula.recibos.listado');
        return $pdf->stream('detalle.pdf');
    }
}
