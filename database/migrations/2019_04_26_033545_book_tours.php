<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BookTours extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_tours', function (Blueprint $table) {
            $table->Increments('id_book_tour');
            $table->string('details',400);
            $table->integer('id_tour')->unsigned();
            $table->foreign('id_tour')->references('id_tour')->on('tours');
            
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
