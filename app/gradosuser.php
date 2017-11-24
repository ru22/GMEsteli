<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class gradosuser extends Model
{
    protected $table='grados_user';


    public function grados(){
        return $this->belongsTomany('App\grados');
    }

     public function asignaturas(){
        return $this->belongsTomany('App\asignaturas');
    }

     public function User(){
        return $this->belongsTomany('App\users');
    }
}
