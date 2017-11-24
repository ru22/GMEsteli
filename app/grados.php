<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class grados extends Model
{
    protected $table='grados';
    protected $prymaryKey='idgrados'; 
    public $timestaps=true;
    protected $fillable=[
    'grados',
    'idseccion'
    ];
    public function detallematricula(){
        return $this->belongsTo(detallematricula::class);
    }
     public function matriculas(){
        return $this->hasMany('App\matriculas');
    }

    public function User(){
        return $this->belongsToMany('App\users');
    }   
}
