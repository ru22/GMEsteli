<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use App\grados; 
use App\detalle_grados;
use App\seccions;
use App\asignaturas;
use App\anios;
use DB;

class gradosController extends Controller 
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function byannios($id)
    {
        return grados::where('idannios',$id)->get(); 
    }

    // public function buscar_grado($anios, $dato=""){

    //     $grados=grados::busqueda($anios,$dato)->paginate(25);
    //     $anios=anios::all();
    //     $annios=$anios->find($anios);
       
    //     return view('vistas.grados.form.lista')
    //      ->with("anios",$anios)
    //      ->with("anios",$anios)
    //      ->with("grados",$grados);
    // }

    // public function index()
    // { 

    //     $grados=grados::paginate(25);
    //     $anios=anios::all();
    //      return view('vistas.grados.form.lista')
    //      ->with("grados",$grados)
    //      ->with("anios",$anios); 
    // }

    public function index ()
    {
        $grados =DB::table('grados') 
            ->select('grados.id','grados.grado')
            ->paginate(5);
       
        return view('vistas.grados.index',["grados"=>$grados]);
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

            $grados = new grados; 
            $grados->grado=$request->get('grado');
            $grados->save(); 

            $grado= DB::table('grados')->where('id',$grados->id)->value('id');

        $asignaturas = $request->get('asignaturas');
             
            $cont= 0;
            while($cont < count($asignaturas)){ 
            $asignatura = new asignaturas();
            $asignatura->idgrados= $grados->id;
            $asignatura->nombre= $asignaturas[$cont];
            $asignatura->save();
            $cont=$cont+1;
        }

        $seccion = $request->get('pidseccion');
  
        $cont= 0;
        while ( $cont < count($seccion)){ 
        $seccions = new seccions();
        $seccions->idgrados= $grados->id;
        $seccions->anio_id=$request->get('periodo');
        $seccions->seccion= $seccion[$cont];
        dd( $seccions);
        $seccions->save();
        $cont=$cont+1; 

        }


           DB::commit();
       } catch (Exception $e) 
       {
           DB::rollback();
       }  
        return Redirect::to('grados');
    } 

    public function buscar($anios, $dato="")
    {
        $grados=grados::busqueda($anios, $dato)->paginate(25);
        $anios=anios::all();
        $annios=$anios->find($anios);
        return view('vistas.grados.index')
        ->with("periodo",$anios)
        ->with("annios",$annios)
        ->with("grados",$grados);
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
