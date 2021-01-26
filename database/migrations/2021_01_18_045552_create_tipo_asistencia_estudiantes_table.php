<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipoAsistenciaEstudiantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_asistencia_estudiantes', function (Blueprint $table) {
            $table->increments('tipoAsistenciaEstudiantesId');
            $table->string('taeCodigo', 7);
            $table->string('tipoAsistenciaEstudiante', 45);
            $table->integer('taeOculto');
            $table->integer('taeAccion');
            $table->date('taefecha');
            $table->string('taesuser', 45);
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
        Schema::dropIfExists('tipo_asistencia_estudiantes');
    }
}
