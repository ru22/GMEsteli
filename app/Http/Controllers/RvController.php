<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\estudiantes;
use App\venta_detalle; 
use App\venta;
use App\anios;
use App\asignaturas;
use DB;
use PDF;

class RvController extends Controller
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

         $venta=DB::table('venta as v') 
         
        ->join('estudiantes as est', 'v.idestudiantes','=','est.id')
        ->join('venta_detalle as d', 'v.id','=','d.id')
        ->select('v.id','v.created_at','est.nombrese','est.apellidose','v.num_comprovante','v.total_venta')
        ->where('v.id','=',$id)
        ->first();
      $detalle=DB::table('venta_detalle as d') 
        ->join('producto as p', 'd.idproducto','=','p.id')
        ->select('p.descripcion as producto','d.forma','d.cantidad','d.monto')
        ->where('d.ventas_id','=',$id)
        ->get();




        $pdf = PDF::loadView('vistas.pagos.recivo.venta',['detalle'=>$detalle,'venta'=>$venta]);
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