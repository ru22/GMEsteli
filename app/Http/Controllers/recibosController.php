<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\estudiantes;
use App\detallematricula; 
use App\matriculas;
use App\grados;
use App\asignaturas;
use DB;
use PDF;

class recibosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */ 
    public function show($id)
    {   
         // CAMPOS DEL ESTUDISNTE DE SU DETALLE

        $matriculas=DB::table('matriculas as m') 
            ->join('estudiantes as est', 'm.idestudiantes','=','est.id')
            ->select('m.id','m.created_at','est.codigo','est.nombrese','est.apellidose')
            ->where('m.id','=',$id)
            ->get();

        $detalle=DB::table('matriculas')
            ->join('seccions as sec', 'matriculas.idseccion','=','sec.idseccion')
            ->join('anios as annio', 'matriculas.idannios','=','annio.idannios')         
            ->join('grados as g', 'matriculas.idgrados','=','g.idgrados')
            ->select('matriculas.id','matriculas.tuno','sec.seccion','annio.periodo','g.grado','g.idgrados')
            ->where('matriculas.id','=',$id)
            ->get();

        $asignaturas=DB::table('asignaturas')
            ->select('asignaturas.nombre')
            ->where('asignaturas.idgrados','=',$detalle[0]->idgrados)
            ->get();

        $pdf = PDF::loadView('vistas.matricula.recibos.matricula',['detalle'=>$detalle,"matriculas"=>$matriculas,"asignaturas"=>$asignaturas]);
        return $pdf->stream('detalle.pdf');

        // return download
     }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
