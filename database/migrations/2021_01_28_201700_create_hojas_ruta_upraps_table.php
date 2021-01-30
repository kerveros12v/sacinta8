<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHojasRutaUprapsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hojas_ruta_upraps', function (Blueprint $table) {
            $table->increments('hojaid');
            $table->integer('codigo');
            $table->integer('fkestudiante');
            $table->integer('fkempresa');
            $table->string('tutorempresarial', 60);
            $table->string('funcionarioint', 60);
            $table->string('horainicio', 5);
            $table->string('horasalida', 5);
            $table->string('motivovisita', 250);
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
        Schema::dropIfExists('hojas_ruta_upraps');
    }
}
