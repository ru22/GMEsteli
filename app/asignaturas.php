<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class asignaturas extends Model
{
    protected $table='asignaturas';
    protected $prymaryKey='id';
    public $timestaps=true;
    protected $fillable=[
    'nombre'
    ];

     public function calificaciones(){
    
       return $this->belongsTo('App\calificaciones');
    }

    public function User(){
        return $this->belongsToMany('App\users');
    } 
}
