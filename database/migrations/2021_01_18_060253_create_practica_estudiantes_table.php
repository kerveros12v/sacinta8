<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePracticaEstudiantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('practica_estudiantes', function (Blueprint $table) {
            $table->increments('practicasEstudiantesId');
            $table->integer('estudiantes_numeroIdentificacion');
            $table->integer('fkPracticasPreProfecionalesId');
            $table->integer('fkhaRealizadoPracticasPreprofesionalesid');
            $table->string('nombreDeLaActividad', 100);
            $table->string('objetivoDeLaActividad', 100);
            $table->integer('periodoAcademico_periodoacademicoId');
            $table->integer('empresas_empresasId');
            $table->string('representanteLega', 45);
            $table->integer('practicasestudiantesOculto');
            $table->integer('practicasestudiantesAccion');
            $table->date('practicasestudiantesfecha');
            $table->string('practicasestudiantesuser', 45);
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
        Schema::dropIfExists('practica_estudiantes');
    }
}
