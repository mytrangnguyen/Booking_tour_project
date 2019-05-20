<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    protected $table = 'customerUsers'; // Tên của bảng trong database
   	protected $fillable = ['user_name','password','address','phonenumber','email','role'];

}
