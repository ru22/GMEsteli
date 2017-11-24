<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class maestros extends Model
{
    protected $table='maestros';
    protected $prymaryKey='idmaestros';
    public $timestaps=false;
    protected $fillable=[
    'nombres',
    'apellidos',
    'direccion',
    'telefono',
    'cedula',
    'profecion',
    'sexo'
    ];
}
