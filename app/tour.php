<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tour extends Model
{
   protected $table = 'tours'; // Tên của bảng trong database
   protected $fillable = ['price_tour','price_promotion','start_date','end_date','start_place','id_vehicles','quantity_people','status'];
   public $timestamps = false;

   public function restaurants() {
   	return $this->hasMany('App\tour','id_res','id_res');
   }
   public function places() {
   	return $this->hasMany('App\tour','id_place','id_place');
   }
   public function hotels() {
   	return $this->hasMany('App\tour','id_hotel','id_hotel');
   }
   public function vehicles() {
   	return $this->hasMany('App\tour','id_vehicles','id_vehicles');
   }
   public function type_tours() {
   	return $this->hasMany('App\tour','id_type','id_type');
   }
   public function comments() {
   	return $this->belongTo('App\tour','id_tour','id_tour');
   }
   public function book_tours() {
   	return $this->belongTo('App\tour','id_tour','id_tour');
   }
}
