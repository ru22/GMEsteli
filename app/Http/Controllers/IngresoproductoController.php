<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use App\padres;
use App\ingreso;
use App\producto;


use DB;

use Carbon\Carbon;
use Response;
use Illuminate\Support\Collection;

class IngresoproductoController extends Controller
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
    {
      
       $ingreso=DB::table('ingresos as i')
      ->join('producto as p', 'i.idproducto','=','p.id')
     ->select('i.id','p.descripcion','i.cantidad','i.fecha')
      ->orderBy('i.idproducto','desc')
      ->get();
   
       return view('vistas.pagos.registroingreso',["ingreso"=>$ingreso]); 
    }

    /**
     * Store a newly created resource in storage.
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   public function ingreso(Request $request)
    { 
       
    } 


    public function store(Request $request)
    
    {   #funcion para agregar y sumar mas productos
        try {
           
            DB::beginTransaction();
            $producto = new ingreso;
            $producto->idproducto=$request->get('idproducto');
            $producto->cantidad=$request->get('cantidad');
            $producto->fecha=$request->get('fecha');
            
            $producto ->save();
             DB::commit();

       } catch (Exception $e) {
             DB::rollback();
       }
       return Redirect::to('nuevo');
      
    }
       
    /**
     * Display the specified resource. 
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
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
