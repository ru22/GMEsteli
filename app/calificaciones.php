<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class calificaciones extends Model
{
    protected $table='calificaciones';
    protected $prymaryKey='id';
    public $timestaps=false;
    protected $fillable=[
    'IP',
    'IIP',
    'NS', 
    'IIIP',
    'IVP',
    'NSS',
    'NF',
    'idgrados',
    'idasignaturas'
    ];
    
    public function matriculas(){
        
       return $this->hasMany('App\matriculas');
    }

    public function asignatura(){

       return $this->belongsTo('App\asignatura');
    }
}
