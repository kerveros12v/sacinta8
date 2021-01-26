<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTiposBacilleratosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipos_bacilleratos', function (Blueprint $table) {
            $table->increments('tiposBacilleratoId');
            $table->integer('tiposbacilleratocodigo');
            $table->string('tipoBacillerato', 45);
            $table->integer('tiposbacilleratoOculto');
            $table->integer('tiposbacilleratoAccion');
            $table->date('tiposbacilleratofecha');
            $table->string('tiposbacilleratouser', 45);
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
        Schema::dropIfExists('tipos_bacilleratos');
    }
}
