<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DetailBookTours extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_book_tours', function (Blueprint $table) {
            $table->integer('id_book_tour')->unsigned();
            $table->foreign('id_book_tour')->references('id_book_tour')->on('book_tours');
            $table->Increments('id_detail');
            $table->float('price');
            $table->integer('adult');
            $table->integer('child');
            $table->integer('baby');
            $table->integer('amount');
            $table->integer('id_cus')->unsigned();
            $table->foreign('id_cus')->references('id_cus')->on('customers');
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
