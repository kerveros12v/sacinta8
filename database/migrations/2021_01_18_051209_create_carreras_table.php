<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarrerasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carreras', function (Blueprint $table) {
            $table->increments('carrerasId');
            $table->string('codigoCarreras', 45);
            $table->string('carrera', 250);
            $table->string('estado', 45);
            $table->integer('carreraTituloAOptener');
            $table->integer('fktipoCarrerasId');
            $table->integer('fkmodalidadCarreraId');
            $table->integer('carrerasinstituto');
            $table->integer('carreraOculto');
            $table->integer('carreraAccion');
            $table->date('carrerafecha');
            $table->string('carrerauser', 45);
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
        Schema::dropIfExists('carreras');
    }
}
