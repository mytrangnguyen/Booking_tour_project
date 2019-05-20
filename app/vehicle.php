<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class vehicle extends Model
{
     protected $table = 'vehicles' ;
   protected $fillabel = ['id_vehicles','name_vehicles','details'];
   public $timestamps = true;
  public function journeys()
   {
   	return $this->hasMany('App\journeys','id_vehicles','id_vehicles');
   }
}
