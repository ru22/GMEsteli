<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use detallematricula;
use App\matriculas;
use App\estudiantes;
use App\detallepagos;
use App\grados;
use App\anios;
use App\seccions;
use PDF;
use DB;

class MesesController extends Controller
{

	public function lista($anios, $dato=""){  


         $idannio=DB::table('anios')->select('idannios')->orderBy('idannios','Desc')->take(1)->get();
         

        $detalle=DB::table('detallepagos as detalle')
          ->join('anios as annio','detalle.idannios','=','annio.idannios')
          ->join('estudiantes as e','detalle.idestudiantes','=','e.id')
         ->select('detalle.pagos_id' ,'e.codigo','e.nombrese','e.apellidose','detalle.mes','detalle.formato_pago','detalle.monto','annio.periodo')

          ->where('annio.idannios','=',$idannio[0]->idannios)
           ->get();
            
            $anios=anios::all();

         return view('vistas.pagos.form.pmeses',["detalle"=>$detalle])
   
         ->with("anios",$anios)
         ->with("anios",$anios);
         

	}

	 public function buscar_est($idannios, $dato=""){


       $detalle=detallepagos::busqueda($idannios,$dato)
        
        ->join('anios as annio','detallepagos.idannios','=','annio.idannios')
        ->join('estudiantes as e','detallepagos.idestudiantes','=','e.id')
         ->select('detallepagos.pagos_id' ,'e.codigo','e.nombrese','e.apellidose','detallepagos.mes','detallepagos.formato_pago','detallepagos.monto','annio.periodo')
       ->paginate(25);

/*       $matriculas->each(function($matriculas){
        $matriculas->estudiantes; 
       });*/
       // dd($matriculas);
        $anios=anios::all(); 
        $annios=$anios->find($anios);
        
    return view('vistas.pagos.form.pmeses',["detalle"=>$detalle])
     
         ->with("anios",$anios)
         ->with("anios",$anios);
          
         

    }

}
