<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use App\padres;
use App\estudiantes;
use App\maestros;
use Session;
use DB;
use App\user;
use Carbon\Carbon;
use Response;
use Illuminate\Support\Collection;

class ingresoController extends Controller
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

        // LISTA DE PADRES DE FAMILIA
        $padres=DB::table('padres')
        ->select('padres.id','padres.cedula','padres.nombres','padres.apellidos')
        ->orderBy('nombres','asc')
        ->get();


        // ingreso
         $matriculas=DB::table('estudiantes as est') 
        ->select('est.id','est.nombrese','est.apellidose')
        ->orderBy('id','asc')
        ->get();


        // LISTA DE MESTROS DEL SISTEMAS
        $maestros=DB::table('maestros as maes')
        ->select('maes.id','maes.nombres','maes.apellidos')
        ->orderBy('id','asc')
        ->get();

        // lista de grado del sistema
        $grados=DB::table('grados as grados')
        ->select('grados.id','grados.grado')
        ->orderBy('id','asc')
        ->get();

        $seccion=DB::table('seccions as s')
            ->select('s.id','s.seccion')
            ->orderBy('id','asc')
            ->get();

        // LISTA DE ANNOS
        $anios=DB::table('anios as a')
        ->select('a.idannios','a.periodo')
        ->orderBy('idannios','asc')
        ->get();

        // LISTA DE ESTUDINTE INGRESADOS Y NO MATRCULADOS EN
        $estudiantes=DB::table('estudiantes as e')
        ->select('e.id','e.codigo','e.edad','e.nombrese','e.apellidose','e.procedencia','e.fnac','e.sexo','e.direccion','created_at')
        ->orderBy('id','asc')
        ->where('estado','=','A')
        ->where('matricula','=','N')->get();

      return view('vistas.ingreso.index',["padres"=>$padres,"matriculas"=>$matriculas,"anios"=>$anios,"grados"=>$grados,"maestros"=>$maestros,"estudiantes"=>$estudiantes,"seccion"=> $seccion]);
 
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

            $user = new  User; 
            $user->name=$request->get('nombrese');
            $user->password=$request->get('codigo');
            $user->remember_token=$request->get('codigo');
            $user->tipo=('3');
            $user->save(); 

             $users =DB::table('users')->max('id');
          

            $padres = new padres;
            $padres->nombres=$request->get('nombres');
            $padres->apellidos=$request->get('apellidos');
            $padres->parentesco=$request->get('parentesco');
            $padres->ocupacion=$request->get('ocupacion');
            $padres->lugar_trabajo=$request->get('lugar_trabajo');
            $padres->telefono=$request->get('telefono');
            $padres->cedula=$request->get('cedula');
            $pad= DB::table('padres')->where('id',$padres->id)->value('id');

            if ($pad) {
                    $padres->$id=$pad;
            }else{
                    $padres ->save(); 
            }

            $id_padres =DB::table('padres')->max('id');

            $idcodigo = $request->get('codigo'); //capturas de datos
           

           $estudiantes = estudiantes::where('codigo', $idcodigo)->first();
             if ($estudiantes){
                Session::flash('flash_message','Este codigo ya existe');
                 return Redirect::to('ingreso');
              }

            $estudiantes = new estudiantes;
            $estudiantes->padres_id= $padres->id;
            $estudiantes->user_id= $user->id;
            $estudiantes->codigo=$idcodigo;
            $estudiantes->nombrese=$request->get('nombrese');
            $estudiantes->apellidose=$request->get('apellidose');
            $estudiantes->procedencia=$request->get('procedencia');
            $estudiantes->fnac=$request->get('fnac');

            $edad = Carbon::parse($estudiantes->fnac)->age;
            $estudiantes->edad=$edad;

            $estudiantes->sexo=$request->get('sexo');
            $estudiantes->estado=('A');
            $estudiantes->matricula=('N');
            $estudiantes->direccion=$request->get('direccion');
            $estudiantes->save();

            Session::flash('flash_message','Datos ingresados');

           DB::commit();
       } catch (Exception $e) 
       {
           DB::rollback();
       }  
        return Redirect::to('ingreso');
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
       
        return ["estudiantes"=>estudiantes::findOrFail($id)];

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
        $estudiantes=estudiantes::findOrFail($id);
        $estudiantes->nombrese=$request->get('nombrese');
        $estudiantes->apellidose=$request->get('apellidose');
        $estudiantes->procedencia=$request->get('procedencia');
        $estudiantes->fnac=$request->get('fnac');
        $estudiantes->sexo=$request->get('sexo');
        $estudiantes->direccion=$request->get('direccion');
        $estudiantes->update(); 

        return Redirect::to('ingreso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $estudiantes=estudiantes::findOrFail($id);
        $estudiantes->estado='I';
        $estudiantes->update();
        return Redirect::to('ingreso');
    }
}
