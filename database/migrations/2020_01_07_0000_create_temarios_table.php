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
            $table->Increments('id');
            $table->String('nombre_temario');
            $table->integer('tema_1')->unsigned()->nullable();
            $table->integer('tema_2')->unsigned()->nullable();
            $table->integer('tema_3')->unsigned()->nullable();
            $table->integer('tema_4')->unsigned()->nullable();
            $table->integer('tema_5')->unsigned()->nullable();
            $table->integer('tema_6')->unsigned()->nullable();
            $table->integer('tema_7')->unsigned()->nullable();
            $table->integer('tema_8')->unsigned()->nullable();
            $table->integer('tema_9')->unsigned()->nullable();
            $table->integer('tema_10')->unsigned()->nullable();
            $table->integer('tema_11')->unsigned()->nullable();
            $table->integer('tema_12')->unsigned()->nullable();
            $table->integer('tema_13')->unsigned()->nullable();
            $table->integer('tema_14')->unsigned()->nullable();
            $table->integer('tema_15')->unsigned()->nullable();
            $table->timestamps();
          
            $table->foreign('tema_1')->references('id')->on('temas')->onDelete('set null');
            $table->foreign('tema_2')->references('id')->on('temas')->onDelete('set null');
            $table->foreign('tema_3')->references('id')->on('temas')->onDelete('set null');
            $table->foreign('tema_4')->references('id')->on('temas')->onDelete('set null');
            $table->foreign('tema_5')->references('id')->on('temas')->onDelete('set null');
            $table->foreign('tema_6')->references('id')->on('temas')->onDelete('set null');
             $table->foreign('tema_7')->references('id')->on('temas')->onDelete('set null');
            $table->foreign('tema_8')->references('id')->on('temas')->onDelete('set null');
            $table->foreign('tema_9')->references('id')->on('temas')->onDelete('set null');
               
           $table->foreign('tema_10')->references('id')->on('temas')->onDelete('set null');
            $table->foreign('tema_11')->references('id')->on('temas')->onDelete('set null');
            $table->foreign('tema_12')->references('id')->on('temas')->onDelete('set null');
            $table->foreign('tema_13')->references('id')->on('temas')->onDelete('set null');
            $table->foreign('tema_14')->references('id')->on('temas')->onDelete('set null');
            $table->foreign('tema_15')->references('id')->on('temas')->onDelete('set null');
           
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
