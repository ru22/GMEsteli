<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use App\padres;
use App\estudiantes;

use DB;

use Carbon\Carbon;
use Response;
use Illuminate\Support\Collection;

class ingresoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct() 
    {
      // $this->middleware('auth');
    }

    public function index()
    { 
   
      $estudiantes=DB::table('estudiantes as e')
      ->join('padres as p','e.padres_id','=','p.id')
     ->select('e.id','e.nombrese','e.apellidose','e.procedencia','e.fnac','e.sexo','e.direccion','p.nombres','p.apellidos')
      ->orderBy('id','asc')
      ->paginate(10);
   
    
      return view('vistas.matricula.index',["estudiantes"=>$estudiantes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vistas.matricula.create'); 
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
            $padres = new padres;
            $padres->nombres=$request->get('nombres');
            $padres->apellidos=$request->get('apellidos');
            $padres->parentesco=$request->get('parentesco');
            $padres->ocupacion=$request->get('ocupacion');
            $padres->lugar_trabajo=$request->get('lugar_trabajo');
            $padres->telefono=$request->get('telefono');
            $padres->cedula=$request->get('cedula');
            $padres ->save();

            $id_padres =DB::table('padres')->max('id');
          
            $estudiantes = new estudiantes;
            $estudiantes->padres_id= $padres->id;
            $estudiantes->nombrese=$request->get('nombrese');
            $estudiantes->apellidose=$request->get('apellidose');
            $estudiantes->procedencia=$request->get('procedencia');
            $estudiantes->fnac=$request->get('fnac');
            $estudiantes->sexo=$request->get('sexo');
            $estudiantes->direccion=$request->get('direccion');
            $estudiantes->save();


           DB::commit();
       } catch (Exception $e) 
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
