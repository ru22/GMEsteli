<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class matriculas extends Model 
{
   protected $table='matriculas';
    protected $prymaryKey='idmatriculas';
    public $timestaps=false;
    protected $fillable=[
    'idestudiantes',
    'fnac',
    'repitente', 
    'ultimo_anio_aprovado',
    'colegio_procedencia'
    ];

     public function delanios()
     {
        return $this->hasOne('App\id','id','idannios');
     }

       public function estudiantes(){
        return $this->belongsTo('App\estudiantes');
    }

      public function grados(){
        return $this->belongsTo('App\grados');
    }

    public function calificaciones(){
        return $this ->hasMany(calificaciones::class);
    }

    public function scopebusqueda($query ,$idannios,$idgrados,$idseccion, $dato=""){

        $resultado=$query->where("matriculas.idannios","=",$idannios)->where("matriculas.idgrados","=",$idgrados)->where("matriculas.idseccion","=",$idseccion)
        ->where(function($q) use($idannios,$idgrados,$dato){
             $q->where('nombrese','like','%'.$dato.'%');
            });

         return $resultado; 
       } 
}


