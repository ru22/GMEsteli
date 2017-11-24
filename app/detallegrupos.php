<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detallegrupos extends Model
{
    protected $table='detallegrupos';
    protected $prymaryKey='iddetalle';
    public $timestaps=true;
    protected $fillable=[
    'idmaestros',
    'idannios',
    'idgrados',
    'idseccion'
    ];
  
}
