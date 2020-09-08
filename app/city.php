<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class city extends Model
{
    protected $table='cities';
    protected $fillable=['id_city','name_city'];
    public $timestamps = true;
}
