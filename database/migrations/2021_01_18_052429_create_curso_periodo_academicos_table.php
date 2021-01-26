<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCursoPeriodoAcademicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('curso_periodo_academicos', function (Blueprint $table) {
            $table->increments('periodoAcademicoCursoId');
            $table->string('cpacodigo', 45);
            $table->integer('fkperiodoacademicoId');
            $table->integer('fkidCursos');
            $table->integer('cpaOculto');
            $table->integer('cpaAccion');
            $table->integer('cpafecha');
            $table->string('cpauser', 45);
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
        Schema::dropIfExists('curso_periodo_academicos');
    }
}
