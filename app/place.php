<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class place extends Model
{
    protected $table = 'places' ;
   	protected $fillabel = ['id_place','name_place','city','description','image'];
   	public $timestamps = false;
  	public function journeys()
   	{
   		return $this->hasMany('App\journeys','id_places','id_places');
   	}
}
