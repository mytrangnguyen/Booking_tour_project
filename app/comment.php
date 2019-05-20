<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    protected $table='comments';
    protected $fillable=['id_user','id_cmt','detail'];
    public $timestamps = true;
    
    public function customers() {
    	return $this->hasMany('App\comment','id_user','id_user');
    }
}
