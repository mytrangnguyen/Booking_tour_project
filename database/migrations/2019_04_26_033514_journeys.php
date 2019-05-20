<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Journeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('journeys', function (Blueprint $table) {
           $table->increments('id_journey');
           $table->float('price_tour');
           $table->integer('id_type_tour');
           $table->integer('id_res');
           $table->integer('id_hotel');
           $table->integer('id_vehicles');
           $table->integer('id_places');
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
