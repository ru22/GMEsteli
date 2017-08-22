<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use App\estudiantes;
use App\matriculas;
use App\detallematricula;

use DB;

class matriculaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
      $this->middleware('auth'); 
    }
    public function index()
    {
         $matriculas=DB::table('matriculas as m') 
         ->join('estudiantes as est', 'm.idestudiantes','=','est.id')
        ->select('m.id','est.nombrese','est.apellidose','m.colegio_procedencia','m.repitente','m.ultimo_anio_aprovado','m.fnac')
         ->orderBy('id','asc')
         ->paginate(10);
         // return ($matriculas);
       
        return view('vistas.matricula.matriculados',["matriculas"=>$matriculas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $matriculas=DB::table('estudiantes as est') 
        ->select('est.id','est.nombrese','est.apellidose')
        ->orderBy('id','asc')
         ->get();
        return view('vistas.matricula.creat',["matriculas"=>$matriculas]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {     
        try {
            DB::beginTransaction();
            $matriculas = new matriculas;
            $matriculas->idestudiantes=$request->get('idestudiantes');
            $matriculas->colegio_procedencia=$request->get('procedencia');
            $matriculas->repitente=$request->get('repitente');
            $matriculas->ultimo_anio_aprovado=$request->get('anioaprobado');
            $matriculas->fnac=$request->get('fnac');

            $estudiante= DB::table('matriculas')->where('idestudiantes',$matriculas->idestudiantes)->value('id');

             if($estudiante){
                //si el  estudiante ya tiene una id matricula cambiar la id de esta matricula por existente
                $matriculas->id=$estudiante;
             }
             else
             {
            //sino crear una nueva
                $matriculas->save();
             }

            $detalle = new detallematricula();
            $detalle->matriculas_id= $matriculas->id;
            $detalle->tuno=$request->get('pidturno');
            $detalle->anio_electivo=$request->get('pidanio_electivo');
            $detalle->anio_curso=$request->get('pidanio_curso');
            $detalle->seccion=$request->get('pidseccion');
          

            $detalle->save();
    
           DB::commit();
              
          }catch (Exception $e)
          {
              DB::rollback();
          }

      
         return ('guardar');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $matriculas=DB::table('matriculas as m') 
         ->join('estudiantes as est', 'm.idestudiantes','=','est.id')
        ->select('m.id','est.nombrese','est.apellidose','m.colegio_procedencia','m.repitente','m.ultimo_anio_aprovado','m.fnac')
         ->where('m.id','=',$id)
        ->first();


         $detalle=DB::table('detallematriculas as detalle')
         ->select('detalle.id','detalle.tuno','detalle.anio_electivo','detalle.anio_curso','detalle.seccion')
         ->orderBy('id','asc')
         ->where('detalle.matriculas_id','=',$id)
         ->get();
        
         return view('vistas.matricula.detalles',["matriculas"=>$matriculas,"detalle"=>$detalle]);
        

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }
}
