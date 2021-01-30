<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->increments('idCursos');
            $table->string('cursoscodigo', 11);
            $table->integer('fkcarrerasId');
            $table->integer('fkparaleloId');
            $table->integer('fknivelAcademicoQueCursaId');
            $table->integer('fkjJornadaAcademicaId');
            $table->integer('cursosOculto');
            $table->integer('cursosAccion');
            $table->date('cursosfecha');
            $table->string('cursosuser', 45);
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
        Schema::dropIfExists('cursos');
    }
}
