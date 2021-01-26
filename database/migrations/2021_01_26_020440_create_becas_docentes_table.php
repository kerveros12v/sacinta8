<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBecasDocentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('becas_docentes', function (Blueprint $table) {
            $table->increments('becasDocentesId');
            $table->string('becasdocentescodigo',10);
            $table->integer('montoBeca');
            $table->date('fechainicioBeca');
            $table->date('fechaFinBeca');
            $table->string('docentes_numeroIdentificacion',10);
            $table->integer('poseeBeca_poseeBecaId');
            $table->integer('fBDfinanciamientoBecaId');
            $table->integer('tipoBeca_tipoBecaId');
            $table->integer('becasdocentesOculto');
            $table->integer('becasdocentesAccion');
            $table->date('becasdocentesfecha');
            $table->string('becasdocentesuser',45);
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
        Schema::dropIfExists('becas_docentes');
    }
}
