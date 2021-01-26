<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipoCarrerasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_carreras', function (Blueprint $table) {
            $table->increments('tipoCarrerasId');
            $table->integer('tipocarrerascodigo');
            $table->string('tipoCarreras', 60);
            $table->integer('tipocarrerasOculto');
            $table->integer('tipocarrerasAccion');
            $table->date('tipocarrerasfecha');
            $table->string('tipocarrerasuser', 45);
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
        Schema::dropIfExists('tipo_carreras');
    }
}
