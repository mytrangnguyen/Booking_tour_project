<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class customerUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('customerUsers', function (Blueprint $table) {
            $table->Increments('id_user');
            $table->string('user_name','200');
            $table->string('password','200');
            $table->string('address','200');
            $table->integer('phonenumber');
            $table->string('email','100');
            $table->string('role');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
