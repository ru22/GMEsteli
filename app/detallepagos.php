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

    public function delanios()
     {
        return $this->hasOne('App\id','id','idannios');
     }
     public function scopebusqueda($query ,$idannios, $dato=""){

        $resultado=$query->where("detallepagos.idannios","=",$idannios)
        ->where(function($q) use($idannios,$dato){
             $q->where('periodo','like','%'.$dato.'%');
            });

         return $resultado; 
       } 
}
