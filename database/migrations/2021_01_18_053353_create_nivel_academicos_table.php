<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNivelAcademicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nivel_academicos', function (Blueprint $table) {
            $table->increments('nivelAcademicoQueCursaId');
            $table->string('nivelacademicocodigo', 45);
            $table->string('nivelAcademicoQueCursa', 45);
            $table->integer('nivelacademicoOculto');
            $table->integer('nivelacademicoAccion');
            $table->date('nivelacademicofecha');
            $table->string('nivelacademicouser', 45);
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
        Schema::dropIfExists('nivel_academicos');
    }
}
