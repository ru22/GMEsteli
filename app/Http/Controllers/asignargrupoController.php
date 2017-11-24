<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\maestros;
use App\user;
use App\anios;
use App\seccions;
use App\asignaturas;
use App\grados;
use App\gradosuser;
use App\seccionuser;
use DB;       

class asignargrupoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   

        $user=DB::table('users')
            ->select('users.id','users.name')
            ->where('tipo','=',2)
            ->get();

    
        $grados=DB::table('grados as grados')
            ->select('grados.id','grados.grado')
            ->get();

        $asignaturas=DB::table('asignaturas')
            ->select('asignaturas.id','asignaturas.nombre')
            ->get();


        $seccion=DB::table('seccions as s')
            ->select('s.id','s.seccion')
            ->get();

       return view('vistas.asignargrupo.index',["asignaturas"=>$asignaturas,"grados"=>$grados,"seccion"=>$seccion,"user"=>$user]);
       
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
    public function actualizar(){

    }

    public function store(Request $request)
    {   
      $seccion = $request->get('pidseccion');
      $grado = $request->get('grados'); 

      if ($seccion!="") {
        $cont= 0;
            while ($cont < count($grado)){ 
            $grados = new gradosuser;
            $grados->user_id = $request->get('user');
            $grados->grados_id = $grado[$cont];
            $grados->save();
            $cont=$cont+1;
        }

        return 'Hola desde el ingreso de grados';
    }else{
      $seccion = $request->get('pidseccion');
      $cont= 0;
            while ($cont < count($seccion)){  
            $seccions = new seccionuser;
            $seccions->user_id = $user;
            $seccions->seccions_id = $seccion[$cont];
            dd($seccions);
            $seccions->save();
            $cont=$cont+1;
        } 
         return back();
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
        $user = user::find($id);
        $grados = grados::all();
        $asignaturas = asignaturas::all();
        $seccion = seccions::all();
        return view('vistas.asignargrupo.form.editar')->with(compact('user','grados','asignaturas','seccion'));
        
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
