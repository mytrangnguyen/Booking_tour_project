<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class user extends Authenticatable

   
{
	use Notifiable;
    protected $table = 'users'; // Tên của bảng trong database
   	protected $fillable = ['user_name','password','address','phone_number','email','role'];
   	public $timestamps = false;

}
