<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBachilleratosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bachilleratos', function (Blueprint $table) {
            $table->increments('bachilleratoId');
            $table->string('fkEstudiantesNumeroIdentificacion', 10);
            $table->integer('fkTiposBacilleratotiposBacilleratoId');
            $table->string('anioGraduacion', 10);
            $table->integer('colegios_idColegios');
            $table->integer('bachilleratoOculto');
            $table->integer('bachilleratoAccion');
            $table->date('bachilleratofecha');
            $table->string('bachilleratouser', 45);
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
        Schema::dropIfExists('bachilleratos');
    }
}
