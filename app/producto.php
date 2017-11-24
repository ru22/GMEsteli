<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
    protected $table='producto';
    protected $prymaryKey='idproducto';
    public $timestaps=false;
    protected $fillable=[
    'descripcion',
    'precio'
    ];
}
