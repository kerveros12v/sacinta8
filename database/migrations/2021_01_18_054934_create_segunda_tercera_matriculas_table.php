<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSegundaTerceraMatriculasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('segunda_tercera_matriculas', function (Blueprint $table) {
            $table->increments('stmid');
            $table->string('fkinstitutos');
            $table->string('fkmatriculas');
            $table->string('fkasignaturas');
            $table->string('fknivelacademico');
            $table->string('fknummatriculas');
            $table->string('stmoculto');
            $table->string('stmaccion');
            $table->date('stmfecha');
            $table->string('stmuser',45);
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
        Schema::dropIfExists('segunda_tercera_matriculas');
    }
}
