<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\matriculas;
use App\estudiantes;
use App\asignatura;
use \App\calificaciones;
use App\seccions;
use App\grados;
use App\user;
use App\anios;
use PDF; 
use DB; 


class perfilContrroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()  
    {   
        $grados=DB::table('grados')
            ->select('grados.id','grados.grado')
            ->get(); 

        $user = auth()->user();
        $idannio=DB::table('anios')->select('idannios')->orderBy('idannios','Desc')->take(1)->get();

        $matriculas=DB::table('matriculas') 
            ->join('estudiantes','estudiantes.id','=','matriculas.idestudiantes')
            ->join('grados','grados.id','=','matriculas.idgrados')
            ->select('matriculas.id','estudiantes.codigo','estudiantes.nombrese','estudiantes.apellidose','grados.grado')
            ->where('estudiantes.user_id',$user->id)
            ->get(); 
   
        $calificaciones=DB::table('calificaciones')
            ->join('matriculas','matriculas.id','=','calificaciones.idmatriculas')
            ->join('anios', 'anios.idannios','=','matriculas.idannios') 
            ->join('asignaturas','asignaturas.id','=','calificaciones.idasignaturas')
            ->join('grados','grados.id','=','calificaciones.idgrados')
            ->join('estudiantes','estudiantes.id','=','matriculas.idestudiantes')
            ->select('calificaciones.id','calificaciones.IP','calificaciones.IIP','calificaciones.NS','calificaciones.IIIP','calificaciones.IVP','calificaciones.NSS','calificaciones.NF','estudiantes.nombrese','estudiantes.user_id','asignaturas.nombre')
            ->where('estudiantes.user_id',$user->id) 
            ->where('calificaciones.idgrados', $user->select_grados_id)
            ->where('anios.idannios','=',$idannio[0]->idannios)
            ->get();

        return view('vistas.perfil.index',["calificaciones"=>$calificaciones,"matriculas"=>$matriculas,"grados"=>$grados]);
    } 

    public function selectGrados($id)
    {
        $user = auth()->user();
            $user->select_grados_id= $id;
            $user->save();
        return back(); 
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
