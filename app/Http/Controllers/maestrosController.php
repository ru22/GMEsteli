<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use App\maestros;
use DB;
use Session;
class maestrosController extends Controller
{
     public function __construct() 
    {  
        // $this->middleware('auth');
        // $this->middleware('admin', ['only'=> ['index']]);
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   

        $maestros=DB::table('maestros as maes') 
        ->select('maes.id','maes.nombres','maes.apellidos','maes.telefono','maes.cedula','maes.sexo')
        ->where('estado','=','A')
        ->orderBy('maes.id','asc')
        ->get();
       
       
       return view('vistas.maestros.index',["maestros"=>$maestros]);
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
       try {
           
            DB::beginTransaction();
            $maestros = new maestros;
            $maestros->nombres=$request->get('nombres');
            $maestros->apellidos=$request->get('apellidos'); 
            $maestros->direccion=$request->get('direccion');
            $maestros->telefono=$request->get('telefono');
            $maestros->cedula=$request->get('cedula');
            $maestros->profecion=$request->get('profecion');
            $maestros->sexo=$request->get('sexo');
            $maestros->estado=('A');
            // dd($maestros);
            $maestros ->save();
        Session::flash('flash_message','Maestro ingresado');
             DB::commit();

       } catch (Exception $e) { 
             DB::rollback();
       }
       return Redirect::to('maestros');
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
        return view('vistas.ingresado.maestros.form.editar', ["maestros"=>maestros::findOrFail($id)]);
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
        $maestros=maestros::findOrFail($id);
        $maestros->nombres=$request->get('nombres');
        $maestros->apellidos=$request->get('apellidos');
        $maestros->direccion=$request->get('direccion');
        $maestros->cedula=$request->get('cedula');
        $maestros->sexo=$request->get('sexo');
        $maestros->profecion=$request->get('profecion');
        $maestros->telefono=$request->get('telefono');
 
        $maestros->update();
         return Redirect::to('maestros');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $maestros=maestros::findOrFail($id);
        $maestros->estado='I';
        $maestros->update();
        return Redirect::to('maestros');

    }
}
