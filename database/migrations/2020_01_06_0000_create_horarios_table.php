<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHorariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('horarios', function (Blueprint $table) {
            $table->Increments('id');
            $table->integer('hora1')->unsigned();
            $table->integer('hora2')->unsigned();
            $table->integer('hora3')->unsigned();
            $table->integer('hora4')->unsigned();
            $table->integer('hora5')->unsigned();
            $table->timestamps();
            $table->foreign('hora1')->references('id')->on('horas');
            $table->foreign('hora2')->references('id')->on('horas');
            $table->foreign('hora3')->references('id')->on('horas');
            $table->foreign('hora4')->references('id')->on('horas');
            $table->foreign('hora5')->references('id')->on('horas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('horarios');
    }
}
