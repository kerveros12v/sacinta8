<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIngresosEstudiantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingresos_estudiantes', function (Blueprint $table) {
            $table->increments('iestId');
            $table->integer('iestcodigo');
            $table->string('ingresosestudiante', 30);
            $table->integer('iestoculto');
            $table->integer('iestaccion');
            $table->date('iestfecha');
            $table->string('iestuser', 45);
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
        Schema::dropIfExists('ingresos_estudiantes');
    }
}
