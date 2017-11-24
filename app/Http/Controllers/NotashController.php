<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\matriculas;
use App\estudiantes;
use App\asignatura;
use App\calificaciones;
use App\seccions;
use App\grados;
use PDF; 
use DB;

class NotashController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $user = auth()->user();
        $matriculas = DB::table('matriculas')
            ->join('estudiantes','estudiantes.id','=','matriculas.idestudiantes') 
            ->join('grados','grados.id','=','matriculas.idgrados')
            ->join('anios','anios.idannios','=','matriculas.idannios')
            ->select('matriculas.id','estudiantes.nombrese','estudiantes.apellidose','grados.grado','anios.periodo')
            ->where('estudiantes.id','=',$id)
            ->get();
          
            $idmatricula=DB::table('matriculas')
                ->select('id')
                ->where('id','=',$id)
                ->get();    
            foreach ($idmatricula as $idmat)
            {
                $idm = $idmat->id; 
            }

        $calificaciones = DB::table('calificaciones')
            ->join('asignaturas','asignaturas.id','=','calificaciones.idasignaturas')
            ->select('calificaciones.idmatriculas','calificaciones.id','calificaciones.IP','calificaciones.IIP','calificaciones.NS','calificaciones.IIIP','calificaciones.IVP','calificaciones.NSS','calificaciones.NF','asignaturas.nombre')
            ->where('calificaciones.idmatriculas','=',$idm)
            ->where('calificaciones.idgrados', $user->select_grados_id)
            ->get();


        $pdf = PDF::loadView('vistas.notas.pdf.notas',["calificaciones"=>$calificaciones,"matriculas"=>$matriculas]);
            return $pdf->stream('calificaciones.pdf');
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
