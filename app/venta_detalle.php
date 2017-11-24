<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class venta_detalle extends Model
{
     protected $table='venta_detalle';
    protected $prymaryKey='id_detallevent';
    public $timestaps=false;
    protected $fillable=[
   	'forma',
   	'cantidad',
   	'monto',
   	'idventa'
    ];

     public function venta(){
        return $this->belongsTo(venta::class);
    }
}
