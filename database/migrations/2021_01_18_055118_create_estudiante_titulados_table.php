<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstudianteTituladosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudiante_titulados', function (Blueprint $table) {
            $table->increments('idEstudiantesTitulados');
            $table->string('codigoITSegresados',45);
            $table->integer('fkinstitutosId');
            $table->integer('fkprovinciaId');
            $table->integer('fkestudiante');
            $table->integer('fkcarrerasId');
            $table->string('etttitulacion',45);
            $table->integer('ettoculto');
            $table->integer('ettaccion');
            $table->date('ettfecha');
            $table->string('ettuser',45);
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
        Schema::dropIfExists('estudiante_titulados');
    }
}
