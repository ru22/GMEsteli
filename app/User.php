<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','tipo',
    ];


    public function grados()
    {
       return $this->belongsToMany('App\grados');
    }

    public function asignaturas(){

       return $this->belongsToMany('App\asignaturas');
    }

     public function seccions(){

       return $this->belongsToMany('App\seccions');
    }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
