<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class restaurant extends Model
{
    protected $table = 'restaurants' ;
	protected $fillabel = ['id_res','name_restaurant','city','details','status'];
	public $timestamps = true;
	public function journeys()
   	{
	   	return $this->hasMany('App\journeys','id_res','id_res');
	}
}
