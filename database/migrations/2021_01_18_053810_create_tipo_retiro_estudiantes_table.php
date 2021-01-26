<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipoRetiroEstudiantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_retiro_estudiantes', function (Blueprint $table) {
            $table->increments('tipoRetiroEstudianteId');
            $table->integer('trecodigo');
            $table->string('tipoRetiroEstudiante', 45);
            $table->integer('treOculto');
            $table->integer('treAccion');
            $table->date('trefecha');
            $table->string('treuser', 45);
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
        Schema::dropIfExists('tipo_retiro_estudiantes');
    }
}
