<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\estudiantes;
use App\pagos;
use App\detallepagos;
use DB;

class pagosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('vistas.pagos.index');
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
        return view('vistas.pagos.create',["matriculas"=>$matriculas]);
       
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
            $pago =new pagos;
            $pago->idestudiantes=$request->get('idestudiantes');
            $estudiante= DB::table('pagos')->where('idestudiantes',$pago->idestudiantes)->value('id');
          
            if($estudiante)
            {
                $pago->id=$estudiante;
            }
            else
            {
                $pago->save();
            }
                
            $idtipo_pago=$request->get('pidtipo_pago');
            $idmes=$request->get('pidmes');
       
            $idforma_pago=$request->get('idforma_pago');
            $idmonto=$request->get('pidmonto');

            $cont=0;

            while($cont < count($pago)) {
            $detalle =new detallepagos();
            $detalle->idestudiantes=$request->get('idestudiantes');
            $detalle->pagos_id=$pago->id;
            $detalle->tipo_pago = $idtipo_pago[$cont];
            $detalle->mes = $idmes[$cont];
            $detalle->monto=$idmonto[$cont];
            $detalle->formato_pago = $idforma_pago[$cont];
            $detalle->save();
            $cont=$cont+1; 
             }
               DB::commit();

           }catch (Exception $e)
            {
              DB::rollback();
            }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
