<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use App\estudiantes; 
class alumnosInactivosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estudiantes=DB::table('estudiantes as e')
        ->select('e.id','e.codigo','e.nombrese','apellidose','procedencia','fnac','sexo')
        ->where('estado','=','I')
        ->orderBy('id','asc')
        ->get();

        return view('vistas.inactivos.index',["estudiantes"=>$estudiantes]);
    }

    
    public function destroy($id)
    {
        $estudiantes=estudiantes::findOrFail($id);
        $estudiantes->estado='A';
        $estudiantes->update();
        return Redirect::to('retirados');
    }
}
