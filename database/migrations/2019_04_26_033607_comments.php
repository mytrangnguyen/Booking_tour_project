<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Comments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->Increments('id_cmt');
            $table->integer('id_user')->unsigned();
            $table->string('detail',200);
            $table->integer('id_tour')->unsigned();
            $table->foreign('id_tour')->references('id_tour')->on('tours');
            $table->foreign('id_user')->references('id_user')->on('customerUsers');
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
