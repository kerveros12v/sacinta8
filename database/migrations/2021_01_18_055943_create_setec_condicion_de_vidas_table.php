<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSetecCondicionDeVidasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('setec_condicion_de_vidas', function (Blueprint $table) {
            $table->increments('idSetecCondiciondeVida');
            $table->integer('fksetecaspirante');
            $table->date('scvFecharegistro');
            $table->string('scvjefehogar', 45);
            $table->string('scvseguromedico', 45);
            $table->integer('scvnumhijos');
            $table->integer('scvhijomayor');
            $table->string('scvasistenciainstitucion', 45);
            $table->string('scvvivienda', 45);
            $table->integer('scvmienbrosHogar');
            $table->string('scvluz', 45);
            $table->string('scvagua', 45);
            $table->string('scvinternet', 45);
            $table->integer('scvoculto');
            $table->integer('scvaccion');
            $table->date('scvfecha');
            $table->string('scvuser', 45);
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
        Schema::dropIfExists('setec_condicion_de_vidas');
    }
}
