<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ingreso extends Model
{
     protected $table='ingresos';
    protected $prymaryKey='id';
    public $timestaps=false;
    protected $fillable=[
    'idproducto',
    'cantidad'
    ];
}
