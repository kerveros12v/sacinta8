<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAsistenciaEstudiantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asistencia_estudiantes', function (Blueprint $table) {
            $table->increments('asistenciaEstudiantesId');
            $table->string('asistenciaestudiantescodigo',6);
            $table->date('fecha');
            $table->integer('matriculas_matriculasId');
            $table->integer('fktipoAsistenciaEstudiantesId');
            $table->integer('fkdistributivocursoasignaturaid');
            $table->integer('asistenciaestudiantesOculto');
            $table->integer('asistenciaestudiantesAccion');
            $table->date('asistenciaestudiantesfecha');
            $table->string('asistenciaestudiantesuser',45);
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
        Schema::dropIfExists('asistencia_estudiantes');
    }
}
