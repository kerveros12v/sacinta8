<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResidenciaEstudiantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('residencia_estudiantes', function (Blueprint $table) {
            $table->increments('residenciaEstudiantesId');
            $table->integer('fkestudianteid');
            $table->string('direccionDomiciliariaResidencia', 100);
            $table->integer('codigoPostal');
            $table->integer('fkperiodo');
            $table->integer('residenciaestudiantesOculto');
            $table->integer('residenciaestudiantesAccion');
            $table->date('residenciaestudiantesfecha');
            $table->string('residenciaestudiantesuser', 45);
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
        Schema::dropIfExists('residencia_estudiantes');
    }
}
