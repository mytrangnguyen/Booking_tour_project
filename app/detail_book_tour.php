<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detail_book_tour extends Model
{
    protected $table = 'detail_book_tours'; // Tên của bảng trong database
   	protected $fillable = ['id_detail','id_tour','adult','child','baby','amount','id_cus','negotiated_price','payment'];
   	public $timestamps = false;
    public function tours() {
   		return $this->hasMany('App\detail_book_tour','id_tour','id_tour');
    }

    public function customer() {
   		return $this->hasMany('App\detail_book_tour','id_cus','id_cus');
    }
}
