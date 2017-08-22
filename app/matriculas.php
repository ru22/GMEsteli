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

     public function detallematricula(){
        return $this->belongsTo(detallematricula::class);
    }
}


