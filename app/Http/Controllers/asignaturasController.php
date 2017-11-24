<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\asignatura;
use App\grados;
use App\anios;
use DB;

class asignaturasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function bygrados($id)
        {
            return asignatura::where('idgrados',$id)->get(); 
        }

    public function index()
    {

        $grados=DB::table('grados as grados')
            ->select('grados.id','grados.grado')
            ->orderBy('id','asc') 
            ->get();
         
         return  view('vistas.asignaturas.form.lista',["grados"=>$grados]);
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
        $asignaturas = $request->get('asignaturas');
             
        $cont= 0;
        while ( $cont < count($asignaturas)){ 
        $asignatura = new asignatura();
        $asignatura->idgrados=$request->get('pidanio');
        $asignatura->nombre= $asignaturas[$cont];
        $asignatura->save();
        $cont=$cont+1;

        }
 
        return  redirect()->route('asignaturas.index')->with('info', 'asignaturas Guardadas ');
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
