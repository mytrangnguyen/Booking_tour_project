<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class journey extends Model
{
   protected $table = 'journeys' ;
   protected $fillabel = ['id_journey','days','id_place','id_tour'];
   public $timestamps = false;
   public function hotels()
   {
   	return $this->hasMany('App\journeys','id_hotel','id_hotel');
   }
   public function places()
   {
   	return $this->hasMany('App\journeys','id_places','id_places');
   }
   public function restaurants()
   {
   	return $this->hasMany('App\journeys','id_res','id_res');
   }
   public function type_tours()
   {
   	return $this->hasMany('App\journeys','id_type','id_type');
   }
   public function vehicles()
   {
   	return $this->hasMany('App\journeys','id_vehicles','id_vehicles');
   }
}
