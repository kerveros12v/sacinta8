<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHorasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('horas', function (Blueprint $table) {
            $table->increments('idHoras');
            $table->integer('nHora');
            $table->string('horaInicio',5);
            $table->string('horaFin',5);
            $table->integer('horasOculto');
            $table->integer('horasAccion');
            $table->date('horasfecha');
            $table->string('horasuser',45);
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
        Schema::dropIfExists('horas');
    }
}
