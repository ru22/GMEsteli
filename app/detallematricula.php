<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detallematricula extends Model
{
    protected $table='detallematriculas';
    protected $prymaryKey='iddetallematriculas';
    public $timestaps=false;
    protected $fillable=[
    'idmatriculas',
    'turno',
    'anio_electivo',
    'anio_curso',
    'seccion'
    
    ];

     public function matriculas(){
        return $this->belongsTo(matriculas::class);
    }
}
