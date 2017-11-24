<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\estudiantes;
use App\padres;
use DB;

class estudiantesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $estudiantes=DB::table('estudiantes as e')
        ->join('padres','padres.id','=','e.padres_id')
        ->select('e.id','e.codigo','e.nombrese','apellidose','procedencia','fnac','sexo')
        ->where('estado','=','A')
        ->orderBy('id','asc')
        ->get();
        
        return view('vistas.alumnos.index',["estudiantes"=>$estudiantes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $estudiantes = estudiantes::find($id);

        return view('vistas.alumnos.form.editar')->with('estudiantes',$estudiantes);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
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
        //
    }
}
