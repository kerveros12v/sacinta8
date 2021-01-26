<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSostenimientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sostenimientos', function (Blueprint $table) {
            $table->increments('idSostenimiento');
            $table->string('sostenimientoscodigo', 4);
            $table->string('sostenimiento', 45);
            $table->integer('sostenimientosOculto');
            $table->integer('sostenimientosAccion');
            $table->date('sostenimientosfecha');
            $table->string('sostenimientosuser', 45);


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
        Schema::dropIfExists('sostenimientos');
    }
}
