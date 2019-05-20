<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    protected $table = 'customers'; // Tên của bảng trong database
   	protected $fillable = ['id_user','name_cus','email','phonenumber','address','requirement'];

   public function tours() {
   	return $this->hasMany('App\customer','id_cus','id_cus');
   }


   
}
