<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class estudiantes extends Model
{
    protected $table='estudiantes';
    protected $prymaryKey='idestudiantes';
    public $timestaps=false;
    protected $fillable=[
    'nombrese',
    'apellidose',
    'procedencia',
    'fnac',
    'sexo',
    'direccion',
    'codigo',
    'padres_id'
    ];

     public function padres(){
        return $this->belongsTo(padres::class);
    }

    public function matriculas(){
        return $this->hasMany('App\matriculas');
    }

}
