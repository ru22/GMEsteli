<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detallematriculas extends Model
{
    protected $table='detallematriculas';
    protected $prymaryKey='id'; 
    public $timestaps=false;
    protected $fillable=[
    'idmatriculas',
    'idgrupos',
    'turno',
    'anio_electivo',
    'anio_curso',
    'anios_id'
    ];

     public function matriculas(){
        return $this->belongsTo(matriculas::class);
    }

     public function anios(){
        return $this->belongsTo(anios::class);
    }

    
}
 