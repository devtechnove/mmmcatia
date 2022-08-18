<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('liders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tipo_lider_id')->unsigned();
            $table->foreign('tipo_lider_id')->references('id')->on('tipo_liders');
            $table->string('ano_ingreso');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('miembro_id')->unsigned();
            $table->foreign('miembro_id')->references('id')->on('miembros');
            $table->smallInteger('status');
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
        Schema::dropIfExists('liders');
    }
}
