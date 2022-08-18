<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalleCampoBlancosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_campo_blancos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('dia_servicio');
            $table->string('cantidad_damas');
            $table->string('cantidad_caballeros');
            $table->string('cantidad_jovenes');
            $table->string('cantidad_ninos');
            $table->string('tx_observacion');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('campo_blanco_id')->unsigned();
            $table->foreign('campo_blanco_id')->references('id')->on('campo_blancos');
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
        Schema::dropIfExists('detalle_campo_blancos');
    }
}
