<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlumnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('nombre');
            $table->string('apellidos');
            $table->string('email')->nullable();   //Para contactarle en caso de nece3sidad.Normalmente sera de uno de los padres. 
            $table->string('telefono')->nullable();  //Para contactarle en caso de nece3sidad.Normalmente sera de uno de los padres. 
            $table->date('fecha_nacimiento');
            $table->integer('id_grupo')->unsigned()->nullable();
            $table->foreign('id_grupo')->references('id_grupo')->on('grupos')->onDelete('set null');
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
        Schema::dropIfExists('alumnos');
    }
}
