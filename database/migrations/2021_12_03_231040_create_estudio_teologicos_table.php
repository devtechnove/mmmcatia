<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstudioTeologicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudio_teologicos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('estudio_teologico');
            $table->string('nombre_instituto'); 
            $table->string('titulo_instituto');
            $table->string('tiempo_instituto');
            $table->string('tipo_teologico');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('miembro_id')->unsigned();
            $table->foreign('miembro_id')->references('id')->on('miembros');
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
        Schema::dropIfExists('estudio_teologicos');
    }
}
