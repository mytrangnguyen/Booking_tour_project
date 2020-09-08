<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
   protected $table='comments';
   protected $guarded=['id_cmt'];
   protected $fillable=['id_user','id_cmt','detail'];
   public $timestamps = false;
   
   public function customers() {
   	return $this->hasMany('App\comment','id_user','id_user');
   }
}