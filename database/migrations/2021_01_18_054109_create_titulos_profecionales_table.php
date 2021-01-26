<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTitulosProfecionalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('titulos_profecionales', function (Blueprint $table) {
            $table->increments('tituloProfecionalId');
            $table->string('tpCodigo', 7);
            $table->string('tituloProfecional', 160);
            $table->integer('tpOculto');
            $table->integer('tpAccion');
            $table->date('tpfecha');
            $table->string('tpuser', 45);
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
        Schema::dropIfExists('titulos_profecionales');
    }
}
