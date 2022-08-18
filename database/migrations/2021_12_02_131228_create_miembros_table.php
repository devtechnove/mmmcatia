<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMiembrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('miembros', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name'); 
            $table->string('lastname');
            $table->string('email')->default('N/A');
            $table->string('telefono');
            $table->string('fecha_nacimiento');
            $table->string('lugar_nacimiento');
            $table->string('tipo_documento');
            $table->string('documento');
            $table->string('direccion');
            $table->string('edad');
            $table->string('ano_ingreso');
            $table->smallInteger('status')->default(0);
            $table->integer('genero_id')->unsigned()->default(189);
            $table->foreign('genero_id')->references('id')->on('generos');
            $table->integer('estado_civil_id')->unsigned()->default(189);
            $table->foreign('estado_civil_id')->references('id')->on('estado_civils');
            $table->integer('nacionalidad_id')->unsigned();
            $table->foreign('nacionalidad_id')->references('id')->on('nacionalidades');
            $table->integer('tipo_sangre_id')->unsigned();
            $table->foreign('tipo_sangre_id')->references('id')->on('tipo_de_sangres');
            $table->integer('pais_id')->unsigned();
            $table->foreign('pais_id')->references('id')->on('pais');
            $table->integer('grado_instruccion_id')->unsigned();
            $table->foreign('grado_instruccion_id')->references('id')->on('grado_instruccions');
            $table->integer('sociedad_id')->unsigned();
            $table->foreign('sociedad_id')->references('id')->on('sociedades');
            $table->integer('estado_id')->unsigned();
            $table->foreign('estado_id')->references('id')->on('estados');
            $table->integer('municipio_id')->unsigned();
            $table->foreign('municipio_id')->references('id')->on('municipios');
            $table->integer('parroquia_id')->unsigned();
            $table->foreign('parroquia_id')->references('id')->on('parroquias');
            $table->integer('tipo_miembro_id')->unsigned();
            $table->foreign('tipo_miembro_id')->references('id')->on('tipo_miembros');
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
        Schema::dropIfExists('miembros');
    }
}
