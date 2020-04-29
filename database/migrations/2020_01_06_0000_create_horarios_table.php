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
            $table->String('nombre_horario');
            $table->integer('hora1')->unsigned()->nullable();
            $table->integer('hora2')->unsigned()->nullable();
            $table->integer('hora3')->unsigned()->nullable();
            $table->integer('hora4')->unsigned()->nullable();
            $table->integer('hora5')->unsigned()->nullable();
            $table->timestamps();
            $table->foreign('hora1')->references('id')->on('horas')->onDelete('set null');
            $table->foreign('hora2')->references('id')->on('horas')->onDelete('set null');
            $table->foreign('hora3')->references('id')->on('horas')->onDelete('set null');
            $table->foreign('hora4')->references('id')->on('horas')->onDelete('set null');
            $table->foreign('hora5')->references('id')->on('horas')->onDelete('set null');
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
