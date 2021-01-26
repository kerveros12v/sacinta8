<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstadosProcesosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estados_procesos', function (Blueprint $table) {
            $table->increments('epid');
            $table->string('epcodigo', 4);
            $table->string('epdetalle', 45);
            $table->integer('epOculto');
            $table->integer('epAccion');
            $table->date('epFecha');
            $table->string('epUser', 45);
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
        Schema::dropIfExists('estados_procesos');
    }
}
