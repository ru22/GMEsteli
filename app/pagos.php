<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pagos extends Model
{
    protected $table='pagos';
    protected $prymaryKey='id_pagos';
    public $timestaps=false;
    protected $fillable=[
   'idestudiantes'
 
    ];

     public function detallepagos(){
        return $this ->hasMany(detallepagos::class);
    }
     public function estudiantes(){
        return $this->belongsTo('App\estudiantes');
    }
}
