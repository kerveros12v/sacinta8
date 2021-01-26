<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateModalidadCarrerasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('modalidad_carreras', function (Blueprint $table) {
            $table->increments('modalidadCarreraId');
            $table->string('modalidadcarreracodigo');
            $table->string('modalidadCarrera', 45);
            $table->string('modalidadcarreraOculto');
            $table->string('modalidadcarreraAccion');
            $table->string('modalidadcarrerafecha');
            $table->string('modalidadcarrerauser', 45);
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
        Schema::dropIfExists('modalidad_carreras');
    }
}
