<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\anios;

use DB;
class aniosController extends Controller
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
        $lista =DB::table('anios')
        ->select('anios.idannios','anios.periodo')
        ->orderBy('periodo','asc')
        ->get();


          return view('vistas.periodo.create',["lista"=>$lista]);
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

            if ($request->ajax()){
                anios::create($request->all());
                return Response()->json([
                    "mensaje"=>"yes!!!"
                    ]);
            }

        // $anios = new anios;
        // $anios->periodo=$request->get('periodo');
        
        // $anios->save();
       
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
