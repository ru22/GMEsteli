<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class anios extends Model
{
    protected $table='anios';
    protected $prymaryKey='idannios';
    public $timestaps=false;
    protected $fillable=[
    'periodo'
    ];

	 public function detallematricula(){
	        return $this ->hasMany(detallematricula::class);
	    }

	    public function grados(){
	    	return $this->hosMany('App\grados','idannios','idgrados');
	    }

    	public function detallematriculas(){
    	
	    	return $this->hosMany('App\matriculas','idannios','id');
	    }

	    
}
