<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class seccions extends Model
{
    protected $table='seccions';
    protected $prymaryKey='idseccions';
    public $timestaps=false;
    protected $fillable=[
    'seccion',
    'anio_id'
    ];
 		public function detallematricula(){
        return $this->belongsTo(detallematricula::class);
    }

     public function User(){
        return $this->belongsToMany('App\users');
    }  
}
