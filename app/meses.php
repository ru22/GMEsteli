<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class meses extends Model
{
  


    protected $table='meses';
    protected $prymaryKey='id';
    public $timestaps=false;
    protected $fillable=[
    'Matricula',
    'Enero',
    'Febrero',
    'Marzo',
    'Abril',
    'Mayo',
    'Junio',
    'Julio',
    'Agosto',
    'Septiembre',
    'Octubre',
    'Nobiembre',
    'Diciembre'
    
    ];
}



