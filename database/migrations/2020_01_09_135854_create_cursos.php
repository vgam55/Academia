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
            $table->integer('id_clase')->unsigned()->nullable();
            $table->integer('id_temario')->unsigned()->nullable();
            $table->integer('id_horario')->unsigned()->nullable();
            $table->timestamps();
         $table->foreign('id_clase')->references('id')->on('clases')->onDelete('set null');
         $table->foreign('id_temario')->references('id')->on('temarios')->onDelete('set null');
         $table->foreign('id_horario')->references('id')->on('horarios')->onDelete('set null');
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
