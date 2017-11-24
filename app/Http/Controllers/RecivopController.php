<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\estudiantes;
use App\detallepagos; 
use App\pagos;
use App\anios;
use App\asignaturas;
use DB;
use PDF;

class RecivopController extends Controller
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

        $pagos=DB::table('detallepagos as m') 
            ->join('estudiantes as est', 'm.idestudiantes','=','est.id')
            ->select('m.iddetallepagos','est.codigo','est.nombrese','est.apellidose')
            ->where('m.iddetallepagos','=',$id)
            ->get();
        
        

              $detalle=DB::table('detallepagos as d')
            
             ->join('anios as a', 'd.idannios','=','a.idannios')
            ->select('d.iddetallepagos','d.mes','d.formato_pago','d.monto','a.periodo')
            ->where('d.iddetallepagos','=',$id)
            ->get();




        $pdf = PDF::loadView('vistas.pagos.recivo.pago',['detalle'=>$detalle,'pagos'=>$pagos]);
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
