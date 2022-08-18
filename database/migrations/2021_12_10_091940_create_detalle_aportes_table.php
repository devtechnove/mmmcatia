<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalleAportesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_aportes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cantidad');
            $table->integer('aporte_id')->unsigned();
            $table->foreign('aporte_id')->references('id')->on('aportes');
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
        Schema::dropIfExists('detalle_aportes');
    }
}
