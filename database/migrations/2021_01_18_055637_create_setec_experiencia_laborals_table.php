<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSetecExperienciaLaboralsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('setec_experiencia_laborals', function (Blueprint $table) {
            $table->increments('selid');
            $table->integer('fkaspirante');
            $table->string('selnombreempresa', 100);
            $table->integer('seltiempodetrabajo');
            $table->string('selactividadRealizada', 100);
            $table->integer('selOculto');
            $table->integer('selAccion');
            $table->date('selfecha');
            $table->string('seluser', 45);
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
        Schema::dropIfExists('setec_experiencia_laborals');
    }
}
