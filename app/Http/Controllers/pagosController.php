<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\PagosRequest;
use App\Http\Requests;
use App\estudiantes;
use App\pagos;
use App\grados;
use App\anios;
use App\meses;
use App\detallepagos;
use DB;

class pagosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 

        // ingreso
        $padres=DB::table('padres')
        ->select('padres.id','padres.cedula','padres.nombres','padres.apellidos')
        ->orderBy('nombres','asc')
        ->get();


        // ingreso
         $matriculas=DB::table('estudiantes as est') 
        ->select('est.id','est.nombrese','est.apellidose')
        ->orderBy('id','asc')
        ->get();


        
        // lista de grado del sistema
        $grados=DB::table('grados as grados')
        ->select('grados.id','grados.grado')
        ->orderBy('id','asc')
        ->get();

        // LISTA DE ANNOS
        $anios=DB::table('anios as a')
        ->select('a.idannios','a.periodo')
        ->orderBy('idannios','asc')
        ->get();

        // LISTA DE ESTUDINTE INGRESADOS Y NO MATRCULADOS EN
        $estudiantes=DB::table('estudiantes as e')
        ->select('e.id','e.codigo','e.nombrese','e.apellidose','e.procedencia','e.fnac','e.sexo','e.direccion','created_at')
        ->orderBy('id','asc')
        ->where('estado','=','A')
        ->where('matricula','=','N')->get();

      return view('vistas.pagos.index',["matriculas"=>$matriculas,"anios"=>$anios,"grados"=>$grados,"estudiantes"=>$estudiantes]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {
        
    $pagos=DB::table('pagos as e')
    ->join('estudiantes as est', 'e.idestudiantes','=','est.id')
     ->select('e.id','est.codigo','est.nombrese','est.apellidose')
      ->orderBy('e.id','asc')
      ->paginate(10);
   
      
    
      return view('vistas.pagos.registrop',["pagos"=>$pagos]);
       
    }

     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
       public function matri(Request $request)
    { 
        try {
            DB::beginTransaction(); 
            $matriculas = new pagos;
            $matriculas->idestudiantes= $matriculas->id;
            $matriculas->idestudiantes=$request->get('id');
          
            $estudiante= DB::table('pagos')->where('idestudiantes',$matriculas->idestudiantes)->value('id');

             if($estudiante){
                //si el  estudiante ya tiene una id matricula cambiar la id de esta matricula por existente
                

                $matriculas->id=$estudiante;
             }
             else
             {
            //sino crear una nueva
                $matriculas->save();
             }

           
          
            $detalle = new detallepagos();
            $detalle->pagos_id= $matriculas->id;
            $detalle->fecha = $request->get('pidfecha');
            $detalle->mes = $request->get('pidmes');
            $detalle->formato_pago = $request->get('pidforma_pago');
            $detalle->monto = $request->get('pidmonto');
            $detalle->idannios=$request->get('pidperiodo');

            $detalle->save();
         
       DB::commit();
          
      }catch (Exception $e)
      {
          DB::rollback();
      }


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
            $matriculas = new pagos;
            $matriculas->idestudiantes=$request->get('id');
            $estudiante= DB::table('pagos')->where('idestudiantes',$matriculas->idestudiantes)->value('id');

             if($estudiante){
                //si el  estudiante ya tiene una id matricula cambiar la id de esta matricula por existente
                

                $matriculas->id=$estudiante;
             }
             else
             {
            //sino crear una nueva
                $matriculas->save();
             }

           
          
            $mes = $request->get('idmes');
            $formato_pago = $request->get('idforma_pago');
            $monto = $request->get('idmonto');
            $idannios=$request->get('idperiodo');
            
            
            $cont= 0;
            while ( $cont < count($mes)){ 
            $detalle = new detallepagos();
            $detalle->idestudiantes= $detalle->id;
            $detalle->idestudiantes=$request->get('id'); 
            $detalle->pagos_id= $matriculas->id;
            $detalle->mes=$mes[$cont];
            $detalle->formato_pago=$formato_pago[$cont];
            $detalle->monto=$monto[$cont];
            $detalle->idannios=$idannios[$cont];
            $detalle->save();
            $cont=$cont+1;
           }
         
       DB::commit();
          
      }catch (Exception $e)
      {
          DB::rollback();
      }


       return  redirect()->route('pagos.create')
        ->with('info', 'El Pago  fue Guardado correctamente');
 

    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pagos=DB::table('pagos as e') 
        ->join('estudiantes as est', 'e.idestudiantes','=','est.id')
        ->select('e.id','est.codigo','est.nombrese','est.apellidose')
        ->where('e.id','=',$id)
        ->first();

        
         $detalle=DB::table('detallepagos as detalle')
            ->join('pagos as p', 'detalle.pagos_id','=','p.id')
          ->join('anios as annio', 'detalle.idannios','=','annio.idannios')
         ->select('detalle.iddetallepagos' ,'detalle.mes','detalle.formato_pago','detalle.monto','annio.periodo')
         ->where('detalle.pagos_id','=',$id)
         ->get();
       
        

         return view('vistas.pagos.pagosdeta',["pagos"=>$pagos,"detalle"=>$detalle]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        
        
         $pagos=DB::table('matriculas as m') 
        ->join('estudiantes as e', 'm.idestudiantes','=','e.id')
        ->join('pagos as p', 'm.idestudiantes','=','p.idestudiantes')
        ->join('seccions as sec', 'm.idseccion','=','sec.id')          
        ->join('grados', 'm.idgrados','=','grados.id')
        ->join('anios as a', 'm.idannios','=','a.idannios')
        ->select('m.idestudiantes','e.codigo','e.nombrese','e.apellidose','m.tuno','grados.grado','sec.seccion','a.periodo')
        ->where('m.idestudiantes','=',$id)
        ->first();
        
       $anios=DB::table('anios as a')
        ->select('a.idannios','a.periodo')
        ->orderBy('idannios','asc')
        ->get();

       $meses=DB::table('meses')
        ->from('meses')
        ->get();


 $idannios=DB::table('anios')->select('idannios')->orderBy('idannios','Desc')->take(1)->get();
        
        $tabla=DB::table('meses as me')
        ->join('matriculas as m', 'me.idestudiantes','=','m.idestudiantes')
        ->join('anios as a', 'me.idannios','=','a.idannios')
         ->select('me.id','me.Matricula','me.Enero','me.Febrero','me.Marzo','me.Abril','me.Mayo','me.Junio','me.Julio','me.Agosto','me.Septiembre','me.Octubre','me.Nobiembre','me.Diciembre','a.periodo')
         ->where('me.idestudiantes','=',$id)
          ->where('a.idannios','=',$idannios[0]->idannios)
         ->get();
       
        
        

    return  view('vistas.pagos.create',["anios"=>$anios,"pagos"=>$pagos,"tabla"=>$tabla,"meses"=>$meses]);
          
    

    }


    public function mostrar()

    {

    $pagos=DB::table('pagos as e')

      ->join('estudiantes as est', 'e.idestudiantes','=','est.id')
     ->select('e.id','est.codigo','est.nombrese','est.apellidose','e.seccion','e.añolectivo','e.idestudiantes')
      ->orderBy('id','asc')
      ->paginate(10);
   
      $matriculas=DB::table('estudiantes as est') 
        ->select('est.id','est.nombrese','est.apellidose')
        ->orderBy('id','asc')
         ->get();

    
      return view('vistas.pagos.create',["pagos"=>$pagos]);
       
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
    
        $meses=meses::findOrFail($id);
        $meses->Enero=$request->get('enero');
        $meses->Febrero=$request->get('febrero');
        $meses->Marzo=$request->get('marzo');
        $meses->Abril=$request->get('abril');
        $meses->Mayo=$request->get('mayo');
        $meses->Junio=$request->get('junio');
        $meses->Julio=$request->get('julio');
        $meses->Agosto=$request->get('agosto');
        $meses->Septiembre=$request->get('septiembre');
        $meses->Octubre=$request->get('octubre');
        $meses->Nobiembre=$request->get('nobiembre');
        $meses->Diciembre=$request->get('diciembre');

        $meses->update();

      
     return  redirect()->route('nuevo.create');
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
