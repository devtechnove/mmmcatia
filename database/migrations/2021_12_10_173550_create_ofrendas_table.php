<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOfrendasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ofrendas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fecha');
            $table->string('mes');
            $table->string('year');
            $table->string('serie');
            $table->string('hora');
            $table->string('tx_descripcion');
            $table->string('total_pagar');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('dia_servicio_id')->unsigned();
            $table->foreign('dia_servicio_id')->references('id')->on('dia_servicios');
            $table->integer('tipo_aporte_id')->unsigned();
            $table->foreign('tipo_aporte_id')->references('id')->on('tipo_aportes');
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
        Schema::dropIfExists('ofrendas');
    }
}
