<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use App\padres;
use App\estudiantes;
use App\producto;


use DB;

use Carbon\Carbon;
use Response;
use Illuminate\Support\Collection;

class NuevopController extends Controller
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
        #funcion para listar en la vista listadproducto todos los productos

        // lista de productos
        
    $producto=DB::table('producto as p')
         ->select('p.id','p.descripcion','p.precio','p.existencia')
        ->orderBy('id','asc')
        ->get();
   return view('vistas.productos.listaproduscto',["producto"=>$producto]);

     
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $idannios=DB::table('anios')->select('idannios')->orderBy('idannios','Desc')->take(1)->get();
        
     $pagos=DB::table('estudiantes') 
           ->join('matriculas', 'estudiantes.id','=','matriculas.idestudiantes')
            ->join('anios', 'matriculas.idannios','=','anios.idannios')
            ->select('estudiantes.id','estudiantes.codigo','estudiantes.nombrese','estudiantes.apellidose')

            ->where('estudiantes.matricula','M')
            ->where('anios.idannios','=',$idannios[0]->idannios)
            ->orderBy('matriculas.idestudiantes','asc')
            ->get();
   
      $matriculas=DB::table('estudiantes as est') 
        ->select('est.id','est.nombrese','est.apellidose')
        ->orderBy('id','asc')
         ->get();

    
      return view('vistas.pagos.listamatri',["pagos"=>$pagos]);
        
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
    #funcion para guardar un huevo producto
    {   
        try {
           
            DB::beginTransaction();
            $producto = new producto;
            $producto->descripcion=$request->get('descripcion');
            $producto->precio=$request->get('precio');
            $producto->existencia=$request->get('existencia'); 
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
        
        return ["producto"=>producto::findOrFail($id)];

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
        #funcion para editar productos

        $producto=producto::findOrFail($id);
        $producto->descripcion=$request->get('descripcion');
        $producto->precio=$request->get('precio');
        $producto->update();

        return Redirect::to('nuevo');
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
