<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJornadaAcademicasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jornada_academicas', function (Blueprint $table) {
            $table->increments('jornadaAcademicaId');
            $table->string('jornadaAcademicaCodigo', 2);
            $table->string('jornadaAcademica', 45);
            $table->integer('jornadasacademicasOculto');
            $table->integer('jornadasacademicasAccion');
            $table->date('jornadasacademicasfecha');
            $table->string('jornadasacademicasuser', 45);
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
        Schema::dropIfExists('jornada_academicas');
    }
}
