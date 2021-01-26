<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notas', function (Blueprint $table) {
            $table->increments('notasid');
            $table->integer('bidBimestres');
            $table->integer('categoria');
            $table->integer('fkidformaCalificacion');
            $table->integer('fkdistributivocursoasignaturaid');
            $table->integer('fkidSegundaTerceraMatricula');
            $table->integer('notasOculto');
            $table->integer('notasAccion');
            $table->date('notasfecha');
            $table->string('notasuser', 45);
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
        Schema::dropIfExists('notas');
    }
}
