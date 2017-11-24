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
use App\meses;
use App\detallepagos;
use DB;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
   $ingreso=DB::table('ingresos as i')
      ->join('producto as p', 'i.idproducto','=','p.id')
     ->select('i.idproducto','p.descripcion','i.cantidad','i.created_at')
      ->orderBy('idproducto','asc')
      ->paginate(10);
   
       return view('vistas.pagos.registroingreso',["ingreso"=>$ingreso]);
    

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {
        #funcion para cargar en la vista registro de pagos el listado
      $pagos=DB::table('pagos as e')
      ->join('estudiantes as est', 'e.idestudiantes','=','est.id')
     ->select('e.id','est.codigo','est.nombrese','est.apellidose')
      ->orderBy('id','asc')
      ->paginate(10);
   
      $matriculas=DB::table('estudiantes as est') 
        ->select('est.id','est.nombrese','est.apellidose')
        ->orderBy('id','asc')
         ->get();

    
      return view('vistas.pagos.registrop',["pagos"=>$pagos]);
       
    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
   {    #funcion para guardar pago de matricula
        try {
            DB::beginTransaction(); 
            $matriculas = new pagos;
            $matriculas->idestudiantes= $matriculas->id;
            $matriculas->idestudiantes=$request->get('id');


           
            $estudiante= DB::table('pagos')->where('idestudiantes',$matriculas->idestudiantes)->value('id');

             

             if($estudiante){
                //si el  estudiante ya tiene una id matricula cambiar la id de esta matricula por existente
                

                $matriculas->id=$estudiante;
             }
             else
             {
            
            //sino crear una nueva
                $matriculas->save();
             }
          

           $pidperiodo=$request->get('pidperiodo');
           $pagos_id= $matriculas->id;
          
            $detalle =  detallepagos::where('idannios',$pidperiodo)->where('pagos_id',$pagos_id)->first();
             if($detalle){
            
             return (' el estudiante ya realizo un pago de matricula de este periodo');
              }

            $detalle = new detallepagos();
            $detalle->pagos_id= $matriculas->id;
            $detalle->idestudiantes= $detalle->id;
            $detalle->idestudiantes=$request->get('id');
            $detalle->mes = $request->get('pidmes');
            $detalle->formato_pago = $request->get('pidforma_pago');
            $detalle->monto = $request->get('pidmonto');
            $detalle->idannios=$pidperiodo;
            $detalle->save();


            $meses = new meses;
            $meses->idestudiantes= $meses->id;
            $meses->idestudiantes=$request->get('id');
            $meses->Matricula=$request->get('estado');
            $meses->idannios=$pidperiodo;
            $meses->save();
            
         
       DB::commit();
          
      }catch (Exception $e)
      {
          DB::rollback();
      }
      return  redirect()->route('producto.create');

    } 
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        # fucion para cargar la vista de compra de productos y el estudiante que la realiza
       $producto=DB::table('producto as p')
        ->select('p.id','p.descripcion','p.precio','p.existencia')
        ->orderBy('id','asc')
        ->get();

        // estudiantes
       $estudiantes=DB::table('estudiantes as e')
        ->select('e.id','e.codigo','e.nombrese','e.apellidose','e.procedencia','e.fnac','e.sexo','e.direccion','created_at')
        ->orderBy('id','asc')
        ->where('estado','=','A')
        ->get();

      return view('vistas.pagos.ventat',["producto"=>$producto,"estudiantes"=>$estudiantes]);


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
