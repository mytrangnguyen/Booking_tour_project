<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hotel extends Model
{
    protected $table = 'hotels' ;
   	protected $fillabel = ['id_hotel','hotel_name','city','description','status'];
   	public $timestamps = true;
  	public function journeys()
   	{
   		return $this->hasMany('App\journeys','id_hotel','id_hotel');
   	}
}
