<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMallaCurricularsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('malla_curriculars', function (Blueprint $table) {
            $table->increments('idmallacurricular');
            $table->integer('iinstitutosId');
            $table->integer('ccarrerasId');
            $table->integer('nnivelAcademicoQueCursaId');
            $table->integer('pperiodoacademicoId');
            $table->integer('asignaturasnivel');
            $table->integer('asignaturasprevia');
            $table->integer('mallacurricularOculto');
            $table->integer('mallacurricularAccion');
            $table->date('mallacurricularfecha');
            $table->string('mallacurricularuser', 45);
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
        Schema::dropIfExists('malla_curriculars');
    }
}
