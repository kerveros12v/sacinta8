<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTituloTercerNivelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('titulo_tercer_nivels', function (Blueprint $table) {
            $table->increments('tituloTercerNivelId');
            $table->integer('titulotercernivelcodigo');
            $table->string('tituloTercerNivel', 120);
            $table->integer('titulotercernivelOculto');
            $table->integer('titulotercernivelAccion');
            $table->date('titulotercernivelfecha');
            $table->string('titulotercerniveluser', 45);
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
        Schema::dropIfExists('titulo_tercer_nivels');
    }
}
