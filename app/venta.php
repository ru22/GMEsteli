<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class venta extends Model
{
    protected $table='venta';
    protected $prymaryKey='id_venta';
    public $timestaps=false;
    protected $fillable=[
   'idestudiantes',
   'num_comprovante',
   'total_venta'
 
    ];

     public function venta_detalle(){
        return $this ->hasMany(venta_detalle::class);
    }
}
