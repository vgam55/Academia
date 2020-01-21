<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfesoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profesores', function (Blueprint $table) {
            $table->Increments('id');
            //$table->integer('tema_15')->unsigned();
            //$table->foreign('tema_1')->references('id')->on('temas');
            $table->integer('id_user')->unsigned();
            $table->string('titulo');
            $table->timestamps();
            $table->foreign('id_user')->references('id')->on('users');
          //  $table->foreign('id_user')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profesores');
    }
}
