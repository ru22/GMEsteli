<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetallepagosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detallepagos', function (Blueprint $table) {
            $table->integer('idestudiantes');
            $table->string('tipo_pago');
            $table->string('mes');
            $table->string('formato_pago');
            $table->integer('monto');
            $table->integer('pagos_id')->unsigned();
            $table->foreign('pagos_id')->references('id')->on('pagos');
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
        Schema::dropIfExists('detallepagos');
    }
}
