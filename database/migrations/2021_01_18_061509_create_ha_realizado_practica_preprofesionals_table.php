<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHaRealizadoPracticaPreprofesionalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ha_realizado_practica_preprofesionals', function (Blueprint $table) {
            $table->increments('hrppid');
            $table->string('hrppcodigo');
            $table->string('hrpp', 4);
            $table->tinyInteger('hppbool');
            $table->integer('hrppOculto');
            $table->integer('hrppAccion');
            $table->date('hrppfecha');
            $table->string('hrppuser', 45);
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
        Schema::dropIfExists('ha_realizado_practica_preprofesionals');
    }
}
