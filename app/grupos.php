<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class grupos extends Model
{
    protected $table='grupos';
    protected $prymaryKey='idgrupos';
    public $timestaps=true;
    protected $fillable=[
    'idmaestros'
    ];
}
