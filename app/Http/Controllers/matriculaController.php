<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use App\estudiantes;
use App\matriculas;
use App\maestros;
use App\seccions;
use App\anios;
use App\asignaturas;
use DB;
use Session;


class matriculaController extends Controller
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

         // $idannio=DB::table('anios')->select('idannios')->orderBy('idannios','Desc')->take(1)->get();
         // dd($idannio[0]->idannios);

        $matriculas=DB::table('estudiantes') 
            ->join('matriculas', 'estudiantes.id','=','matriculas.idestudiantes')
            ->join('anios', 'matriculas.idannios','=','anios.idannios') 
            ->select('estudiantes.id','estudiantes.codigo','estudiantes.nombrese','estudiantes.apellidose')
            ->where('estudiantes.matricula','M')
            // ->where('anios.idannios','=',$idannio[0]->idannios)
            ->orderBy('matriculas.idestudiantes','asc')
            ->get();

   
        $seccion=DB::table('seccions as s')
            ->select('s.id','s.seccion')
            ->orderBy('id','asc')
            ->get();

           

        $anios=DB::table('anios as a')
            ->select('a.idannios','a.periodo') 
            ->orderBy('idannios','asc')
            ->get();

        $grados=DB::table('grados as grados')
            ->select('grados.id','grados.grado')
            ->orderBy('id','asc')
            ->get();
         
        return view('vistas.matricula.form.listamatricula',["grados"=>$grados,"anios"=>$anios,"seccion"=>$seccion,"matriculas"=>$matriculas]);
        // "lista"=>$lista,
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function actualizar($id){
        $estudiantes=estudiantes::findOrFail($id);
        $estudiantes->matricula="M";
        $estudiantes->save();
    }
    
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

            $edad = $request->get('edad');
           
            $matriculas = new matriculas;
            $matriculas->idestudiantes=$request->get('idestudiantes'); 
            $matriculas->tuno=$request->get('pidturno'); 
            $matriculas->idannios=$request->get('pidperiodo');
            $matriculas->idgrados=$request->get('pidanio');
            $matriculas->repitente=$request->get('repitente');
            $matriculas->repitente=$request->get('repitente');
            $matriculas->annio_curso=$request->get('anioaprobado');

            if ($edad >= 9 && $edad <=15){
                $matriculas->idseccion=('1');
                $matriculas->save(); 
              }elseif ($edad >= 4 && $edad <30) {
                $matriculas->idseccion=('1');
                $matriculas->save(); 
              }
            
           $this->actualizar($request->get('idestudiantes'));
         
        DB::commit();
               
          }catch (Exception $e)
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
        $matriculas=DB::table('matriculas as matriculas')
            ->join('estudiantes','matriculas.idestudiantes','=','estudiantes.id')
            ->join('seccions as sec', 'sec.id','=','matriculas.idseccion')
            ->join('anios as annio', 'matriculas.idannios','=','annio.idannios')          
            ->join('grados', 'grados.id','=','matriculas.idgrados')
            ->select('matriculas.id','matriculas.tuno','estudiantes.codigo','sec.seccion','annio.periodo','grados.grado','grados.id')
            ->where('estudiantes.id','=',$id)
            ->get();

            $asignaturas=DB::table('asignaturas')
            ->select('asignaturas.nombre')
            ->where('asignaturas.id','=',$matriculas[0]->id)
            ->get();

            
             // dd($asignaturas,  $matriculas);
            
         return view('vistas.matricula.detalles',["matriculas"=>$matriculas,"asignaturas"=>$asignaturas]);
    }

    public function perfil($id){

        $estudiantes=DB::table('estudiantes') 

            ->join('padres','estudiantes.padres_id','=','padres.id')
            ->select('estudiantes.codigo','estudiantes.nombrese','estudiantes.apellidose','estudiantes.direccion','estudiantes.fnac','estudiantes.sexo',
               'padres.nombres','padres.apellidos','padres.cedula','padres.telefono','padres.parentesco','padres.lugar_trabajo','padres.ocupacion')
            ->where('estudiantes.id','=',$id)
            ->get(); 

            return view('vistas.matricula.form.perfil',["estudiantes"=>$estudiantes]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $matriculas = DB::table('matriculas')
        //     ->join('estudiantes','estudiantes.id','=','matriculas.idestudiantes')
        //     ->select('matriculas.id','estudiantes.nombrese','estudiantes.apellidose')
        //     ->where('estudiantes.id','=',$id)
        //     ->get();

        //     $matriculas = matriculas::findOrFail($id);


        //     $idmatricula=DB::table('matriculas')
        //         ->select('id')
        //         ->where('id','=',$id)
        //         ->get();    
        //     foreach ($idmatricula as $idmat)
        //     {
        //         $idm = $idmat->id;
        //     }

        //  $calificaciones = DB::table('calificaciones')
        //     ->join('asignaturas','asignaturas.idasignaturas','=','calificaciones.idasignaturas')
        //     ->select('calificaciones.idmatriculas','calificaciones.id','calificaciones.IP','calificaciones.IIP','calificaciones.NS','calificaciones.IIIP','calificaciones.IVP','calificaciones.NSS','calificaciones.NF','asignaturas.idasignaturas')
        //     ->where('calificaciones.idmatriculas','=',$idm)
        //     ->get();
        //     // dd($matriculas,$calificaciones );
           
        // return view('vistas.notas.form.notas_personales',["matriculas"=>$matriculas,"calificaciones"=>$calificaciones]);
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
        $matriculas = matriculas::findOrFail($id);
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
