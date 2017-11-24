<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\PagosRequest;
use App\Http\Requests;
use App\estudiantes;
use App\pagos;
use App\grados;
use App\anios;
use App\venta;


use App\venta_detalle;
use DB;

class VentaController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct()
     {
        
     }

    public function index()
    { 
      
      
        
      
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

# funcion para listar en la vista listadov  todas los registros de ventas de productos

    {
        $venta=DB::table('venta as v') 
         
        ->join('estudiantes as est', 'v.idestudiantes','=','est.id')
        ->join('venta_detalle as d', 'v.id','=','d.id')

        ->select('v.id','v.created_at','est.nombrese','est.apellidose','v.num_comprovante','v.total_venta')
        // ->orderBy('v.id','desc')
        // ->groupBy('v.id','v.created_at','est.nombrese','est.apellidose','v.num_comprovante','v.total_venta')

        ->get();

        


         return view('vistas.pagos.listadov',["venta"=>$venta]);

      
    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
   { 
       #funcion para guardar la venta y los detalles de la venta

       try {
            DB::beginTransaction(); 
            $matriculas = new venta;
            $matriculas->idestudiantes= $matriculas->id;
            $matriculas->idestudiantes=$request->get('pidestudiantes');
            $matriculas->num_comprovante=$request->get('pidcomprovante');
            $matriculas->total_venta=$request->get('total_venta');
            $matriculas->save();
          
            $producto = $request->get('idproducto');
            $forma = $request->get('idforma_pago');
            $cantidad = $request->get('idcantidad');
            $monto = $request->get('idmonto');
            
            
            
            $cont= 0;
            while ( $cont < count($cantidad)){ 
            $detalle = new venta_detalle();
            $detalle->ventas_id= $matriculas->id;
            $detalle->idproducto=$producto[$cont];
            $detalle->forma=$forma[$cont];
            $detalle->cantidad=$cantidad[$cont];
            $detalle->monto=$monto[$cont];
            $detalle->save();
            $cont=$cont+1;
           }
         
       DB::commit();
          
      }catch (Exception $e)
      {
          DB::rollback();
      }
      

      return('registro de venta Guardada');
    }
  

    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      #funcion para mostrar  en la vista detalleventa los detalles de las ventas


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


       

         return view('vistas.pagos.detalleventa',["venta"=>$venta,"detalle"=>$detalle]);

  
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
    public function update($id)
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
