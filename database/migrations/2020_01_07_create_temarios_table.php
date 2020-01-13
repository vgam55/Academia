<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTemariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temarios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('tema_1')->unsigned();
            $table->integer('tema_2')->unsigned();
            $table->integer('tema_3')->unsigned();
            $table->integer('tema_4')->unsigned();
            $table->integer('tema_5')->unsigned();
            $table->integer('tema_6')->unsigned();
            $table->integer('tema_7')->unsigned();
            $table->integer('tema_8')->unsigned();
            $table->integer('tema_9')->unsigned();
            $table->integer('tema_10')->unsigned();
            $table->integer('tema_11')->unsigned();
            $table->integer('tema_12')->unsigned();
            $table->integer('tema_13')->unsigned();
            $table->integer('tema_14')->unsigned();
            $table->integer('tema_15')->unsigned();
            $table->foreign('tema_1')->references('id')->on('temas');
            $table->foreign('tema_2')->references('id')->on('temas');
            $table->foreign('tema_3')->references('id')->on('temas');
            $table->foreign('tema_4')->references('id')->on('temas');
            $table->foreign('tema_5')->references('id')->on('temas');
            $table->foreign('tema_6')->references('id')->on('temas');
            $table->foreign('tema_7')->references('id')->on('temas');
            $table->foreign('tema_8')->references('id')->on('temas');
            $table->foreign('tema_9')->references('id')->on('temas');
            $table->foreign('tema_10')->references('id')->on('temas');
            $table->foreign('tema_11')->references('id')->on('temas');
            $table->foreign('tema_12')->references('id')->on('temas');
            $table->foreign('tema_13')->references('id')->on('temas');
            $table->foreign('tema_14')->references('id')->on('temas');
            $table->foreign('tema_15')->references('id')->on('temas');
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
        Schema::dropIfExists('temarios');
    }
}
