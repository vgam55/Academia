<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCursos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->Increments('id');
            $table->String('nombre_curso');
            $table->integer('id_clase')->unsigned();
            $table->integer('id_temario')->unsigned();
            $table->integer('id_horario')->unsigned();
            $table->timestamps();
            $table->foreign('id_clase')->references('id')->on('clases');
            $table->foreign('id_temario')->references('id')->on('temarios');
            $table->foreign('id_horario')->references('id')->on('horarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cursos');
    }
}
