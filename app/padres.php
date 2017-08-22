<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class padres extends Model
{
    protected $table='padres';
    protected $prymaryKey='id_padres';
    public $timestaps=false;
    protected $fillable=[
    'nombres',
    'apellidos',
    'parentesco',
    'ocupacion',
    'lugar_trabajo',
    'telefono',
    'cedula'
    ];

    public function estudiantes(){
        return $this ->hasMany(estudiantes::class);
    }

}
