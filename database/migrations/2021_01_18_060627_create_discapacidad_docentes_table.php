<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiscapacidadDocentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('discapacidad_docentes', function (Blueprint $table) {
            $table->increments('discapacidadesDocentesId');
            $table->string('docentesCarnetConadis', 7);
            $table->integer('docentesPorcentale');
            $table->string('docentes_numeroIdentificacion', 10);
            $table->integer('tipoDiscapacidad_tipoDiscapacidadid');
            $table->integer('discapacidadesdocentesOculto');
            $table->integer('discapacidadesdocentesAccion');
            $table->date('discapacidadesdocentesfecha');
            $table->string('discapacidadesdocentesuser', 45);
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
        Schema::dropIfExists('discapacidad_docentes');
    }
}
