<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login. 
     *
     * @var string
     */
    protected $redirectTo = '/Admin';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }
 
     public function redirectPath()
    {
        if (auth()->user()->tipo !=1 && auth()->user()->tipo !=3){

           return '/calificaciones';

        }elseif(auth()->user()->tipo !==1 && auth()->user()->tipo !=2){

            return '/perfil'; 

        }else{

            return '/Admin'; 
        }
        
    }

     public function authenticated()
    {
        // $user = auth()->user();

        // if (! $user->select_grados_id) { 
        //     $user->select_grados_id =  $user->grados->first()->id;
        //     $user->select_asignaturas_id = $user->grados->first()->id;
        //     $user->save();
             
        // }
    } 
}
