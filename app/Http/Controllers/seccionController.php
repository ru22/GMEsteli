<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\seccions;
use App\grados;
use DB;
class seccionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function bygrados($id)
    {
        return seccions::where('idgrados',$id)->get(); 
    }

    public function index()

    {   
        $anios=DB::table('anios as anios')
       ->select('anios.idannios','anios.periodo')
        ->orderBy('idannios','')
        ->get();

         $grados=DB::table('grados as grados')
        ->select('grados.id','grados.grado')
        ->orderBy('id','desc')
        ->get();

         $seccion=DB::table('seccions as secc')
        ->join('grados as gra','secc.id','=','gra.id')
        ->select('secc.id','secc.seccion','gra.grado')
        ->orderBy('grado','asc')
        ->get();
       return view('vistas.seccion.index',["grados"=>$grados,"seccion"=>$seccion]); 
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
        $seccion = $request->get('pidseccion');
  
        $cont= 0;
        while ( $cont < count($seccion)){ 
        $seccions = new seccions();
        $seccions->idgrados=$request->get('pidanio');
        $seccions->anio_id=$request->get('pidperiodo');
        $seccions->seccion= $seccion[$cont];
       
        $seccions->save();
        $cont=$cont+1; 

        }
 
        return  redirect()->route('seccion.index')->with('info', 'asignaturas Guardadas ');
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
        
    }
}
