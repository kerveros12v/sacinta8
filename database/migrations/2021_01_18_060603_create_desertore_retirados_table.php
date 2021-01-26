<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDesertoreRetiradosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('desertore_retirados', function (Blueprint $table) {
            $table->increments('idDesertoresRetiradosId');
            $table->string('codigoITS', 11);
            $table->integer('provincia_provinciaId');
            $table->integer('tipoRetiroEstudianteId');
            $table->integer('matriculas_matriculasId');
            $table->string('desertoresretiradosMateria', 7);
            $table->date('fechaDelDocumentoHabilitantePresentado');
            $table->integer('desertoresretiradosOculto');
            $table->integer('desertoresretiradosAccion');
            $table->date('desertoresretiradosfecha');
            $table->string('desertoresretiradosuser', 45);
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
        Schema::dropIfExists('desertore_retirados');
    }
}
