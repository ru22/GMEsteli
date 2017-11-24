<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstudiantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudiantes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('codigo');
            $table->string('nombrese');
            $table->string('apellidose');
            $table->string('procedencia');
            $table->string('fnac');
            $table->string('sexo');
            $table->string('direccion');
            $table->string('estado');
            $table->integer('padres_id')->unsigned();
            $table->foreign('padres_id')->references('id')->on('padres');
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
        Schema::dropIfExists('estudiantes');
    }
}
