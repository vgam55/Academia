<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clases', function (Blueprint $table) {
            $table->Increments('id');
            $table->String('nombre_clase');
            $table->integer('id_profesor')->unsigned()->nullable();
            $table->integer('id_grupo')->unsigned()->nullable();
            $table->timestamps();
            $table->foreign('id_profesor')->references('id')->on('profesores')->onDelete('set null');
            $table->foreign('id_grupo')->references('id_grupo')->on('grupos')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clases');
    }
}
