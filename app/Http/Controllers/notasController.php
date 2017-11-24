<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use detallematricula;
use App\matriculas;
use App\estudiantes;
use App\asignatura;
use \App\calificaciones;
use App\seccions;
use App\grados;
use App\gradosuser; 
use App\user;
use PDF; 
use DB; 

class notasController extends Controller
{
    public function index(){
    
        $user = auth()->user();
        $idannio=DB::table('anios')->select('idannios')->orderBy('idannios','Desc')->take(1)->get();
        $calificaciones = DB::table('calificaciones')
            ->join('matriculas','matriculas.id','=','calificaciones.idmatriculas')
            ->join('anios','anios.idannios','=','matriculas.idannios')
            ->join('asignaturas','asignaturas.id','=','calificaciones.idasignaturas')
            ->join('estudiantes','estudiantes.id','=','matriculas.idestudiantes')
            ->where('calificaciones.idgrados', $user->select_grados_id)
            ->where('calificaciones.idasignaturas', $user->select_asignaturas_id)
            ->where('calificaciones.idseccion', $user->select_seccion_id)
            ->select('estudiantes.nombrese','estudiantes.apellidose','asignaturas.nombre','calificaciones.id','calificaciones.idmatriculas','calificaciones.IP','calificaciones.IIP','calificaciones.NS','calificaciones.IIIP','calificaciones.IVP','calificaciones.NSS','calificaciones.NF')
            ->where('anios.idannios','=',$idannio[0]->idannios)
            ->get();
          
      
        return view('vistas.notas.index',["calificaciones"=>$calificaciones]);
    }
    
    public function selectGrados($id,$idasig,$idsec)
    {
        $user = auth()->user();
            $user->select_grados_id= $id;
            $user->select_seccion_id= $idsec;
            $user->select_asignaturas_id= $idasig;
            $user->save();
         return back(); 
    }
    public function listado(){  

        $idannio=DB::table('anios')->select('idannios')->orderBy('idannios','Desc')->take(1)->get();
         // dd($idannio[0]->idannios);
        $matriculas=DB::table('matriculas') 
            ->join('estudiantes','estudiantes.id','=','matriculas.idestudiantes')
            ->join('anios', 'matriculas.idannios','=','matriculas.idannios') 
            ->select('matriculas.id','estudiantes.codigo','estudiantes.nombrese','estudiantes.apellidose')
            ->where('anios.idannios','=',$idannio[0]->idannios)
            ->get();
            return view('vistas.notas.form.lista',["matriculas"=>$matriculas]);
    }
   
   public function store(Request $request){ 
      
        // $parsial = $request->get('parcial'); 
        // $nota = $request->get('primer');
        // $notados = $request->get('segundo'); 
        // $idestudiantes =$request->get('id'); 
    
        //     for ($i=0; $i <sizeof($nota); $i++) { 

        //         // if ($parsial == 0) {
        //             $notas =new calificaciones();
        //             $notas->idmatriculas=$idestudiantes[$i];
        //             $notas->idasignaturas=$request->get('asignaturas');
        //             $notas->IP=$nota[$i];
        //             $notas->IIP=$notados[$i];
        //             $notas->save();

        //         } 
        //         else{

        //                 $id= $request->get('id');
        //                 $calificaciones=calificaciones::findOrFail($id);
                      
        //                 $calificaciones->IP=$request->get('primero');
        //                 $calificaciones->IIP=$request->get('segundo');
        //                 $calificaciones->NS=$request->get('notasemestral');
        //                 $calificaciones->IIIP=$request->get('IIIP');
        //                 $calificaciones->IVP=$request->get('IVP');
        //                 $calificaciones->NSS=$request->get('NSS');
        //                 $calificaciones->NF=$request->get('NF');
        //                 $calificaciones->update(); 
        //             // $notas =new calificaciones();
        //             // $notas->idmatriculas=$idestudiantes[$i];
        //             // $notas->idasignaturas=$request->get('asignaturas');
        //             // $notas->IIIP=$nota[$i];
        //             // $notas->IVP=$notados[$i];

        //             // $idestudiantes = DB::table('calificaciones')->where('idmatriculas',$notas->idmatriculas)->value('idmatriculas');

        //             // if ($idestudiantes) { 
        //             //    $notas->idmatriculas=$idestudiantes[$i];
        //             //     $notas->save();
        //             // }
        //         } 
        //     }


    }
 
    public function show($id){  

         $matriculas=DB::table('matriculas') 
            ->join('estudiantes','estudiantes.id','=','matriculas.idestudiantes')
            ->select('matriculas.id','estudiantes.codigo','estudiantes.nombrese','estudiantes.apellidose')
            ->where('matriculas.id','=',$id)
            ->get();

        $calificaciones=DB::table('calificaciones')
        ->join('matriculas','matriculas.id','=','calificaciones.idmatriculas')
        ->join('asignaturas','asignaturas.id','=','calificaciones.idasignaturas')
        ->join('estudiantes','estudiantes.id','=','matriculas.idestudiantes')
        ->select('calificaciones.id','calificaciones.IP','calificaciones.IIP','calificaciones.NS','calificaciones.IIIP','calificaciones.IVP','calificaciones.NSS','calificaciones.NF','estudiantes.nombrese','estudiantes.apellidose','asignaturas.nombre')
        ->where('idmatriculas','=',$id)
        ->get();

        return view('vistas.notas.form.notas_personales',["calificaciones"=>$calificaciones,"matriculas"=>$matriculas]);
    }

     public function buscarnota($idgrados){

        $calificaciones=calificaciones::busqueda($idgrados)
            ->join('matriculas','matriculas.id','=','calificaciones.idmatriculas')
            ->join('estudiantes','estudiantes.id','=','matriculas.idestudiantes')
            ->join('asignaturas','asignaturas.id','=','calificaciones.idasignaturas')
            ->join('grados','grados.id','=','calificaciones.idgrados')
            ->select('asignaturas.nombre','estudiantes.nombrese','estudiantes.apellidose','calificaciones.idgrados','calificaciones.idasignaturas')
            ->get();

        return view('vistas.notas.index')->with('calificaciones',$calificaciones);
    }

    public function edit($id){
        
        
    }

    public function update(Request $request,$id)
    {   
        $idcal = $request->get('id');
        $nota = $request->get('primer');
        $segundo = $request ->get('segundo');
        $notas = $request ->get('notaS');

        for ($i=0; $i <sizeof($request->get('id'));++ $i) { 

            $calificaciones=calificaciones::findOrFail($idcal[$i]);  

            $calificaciones->IP=$nota[$i];
            $calificaciones->IIP=$segundo[$i];
            $calificaciones->NS=$notas[$i];

            $calificaciones->save(); 
        }

       return back();
    }
}
   