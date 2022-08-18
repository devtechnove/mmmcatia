<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAportesTable extends Migration
{
    /**
     * Run the migrations. 
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aportes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fecha');
            $table->string('mes');
            $table->string('year');
            $table->string('serie');
            $table->string('hora');
            $table->string('tx_descripcion');
            $table->decimal('total_pagar',4,2);
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('aportes');
    }
}
