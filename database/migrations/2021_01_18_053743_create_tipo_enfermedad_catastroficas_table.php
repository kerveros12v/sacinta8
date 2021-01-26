<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipoEnfermedadCatastroficasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_enfermedad_catastroficas', function (Blueprint $table) {
            $table->increments('tecid');
            $table->integer('teccodigo');
            $table->string('tipoEnfermedadCatastrofica',45);
            $table->integer('tecOculto');
            $table->integer('tecAccion');
            $table->date('tecfecha');
            $table->string('tecuser',45);
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
        Schema::dropIfExists('tipo_enfermedad_catastroficas');
    }
}
