<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Customers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->Increments('id_cus');
            $table->integer('id_user')->unsigned();
            $table->foreign('id_user')->references('id_user')->on('customerUsers');
            $table->string('name_cus','200');
            $table->string('email','100');
            $table->integer('phonenumber');
            $table->string('address','200');
            $table->string('requirement','200');
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
