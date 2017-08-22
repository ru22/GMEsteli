<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detallepagos extends Model
{
     protected $table='detallepagos';
    protected $prymaryKey='id_detallepagos';
    public $timestaps=false;
    protected $fillable=[
   'idestudiantes',
   	'forma_pago',
   	'tipo_pago',
   	'monto',
   	'mes',
   	'idpagos'
    ];

     public function pagos(){
        return $this->belongsTo(pagos::class);
    }
}
