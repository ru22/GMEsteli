<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class seccionuser extends Model
{
    protected $table='seccions_user';
    protected $prymaryKey='idseccions';
    public $timestaps=false;
    protected $fillable=[
    'seccions_id',
    'user_id'
    ];
}
