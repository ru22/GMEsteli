<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class estudiantes extends Model
{
    protected $table='estudiantes';
    protected $prymaryKey='id_estudiantes';
    public $timestaps=false;
    protected $fillable=[
    'nombrese',
    'apellidose',
    'procedencia',
    'fnac',
    'sexo',
    'direccion',
    'padres_id'

    ];

     public function padres(){
        return $this->belongsTo(padres::class);
    }
}
