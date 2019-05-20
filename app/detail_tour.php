<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detail_tour extends Model
{
    protected $table = 'detail_tours'; // Tên của bảng trong database
   	protected $fillable = ['id_detail','id_tour','adult','child','baby','amount','id_cus','negotiated_price','payment'];
   	public $timestamps = true;
    public function restaurants() {
   		return $this->hasMany('App\tour','id_res','id_res');
    }
   
}
