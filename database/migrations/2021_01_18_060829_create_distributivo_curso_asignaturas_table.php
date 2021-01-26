<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDistributivoCursoAsignaturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('distributivo_curso_asignaturas', function (Blueprint $table) {
            $table->increments('dcaid');
            $table->integer('fkcursosperiodoacademicod');
            $table->integer('fkdistributivosId');
            $table->integer('fkasignaturasId');
            $table->integer('dcaOculto');
            $table->integer('dcaAccion');
            $table->date('dcafecha');
            $table->string('dcasuser', 45);
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
        Schema::dropIfExists('distributivo_curso_asignaturas');
    }
}
