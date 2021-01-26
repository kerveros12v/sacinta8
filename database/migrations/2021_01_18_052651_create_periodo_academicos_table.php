<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeriodoAcademicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('periodo_academicos', function (Blueprint $table) {
            $table->increments('periodoacademicoId');
            $table->string('codigoPeriodo', 11);
            $table->string('periodoAcademico', 11);
            $table->integer('fkcicloperiodo');
            $table->date('fechaInicio');
            $table->date('fechafin');
            $table->string('observaciones', 100);
            $table->integer('actual');
            $table->integer('periodoacademicoOculto');
            $table->integer('periodoacademicoAccion');
            $table->date('periodoacademicofecha');
            $table->string('periodoacademicouser', 45);
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
        Schema::dropIfExists('periodo_academicos');
    }
}
