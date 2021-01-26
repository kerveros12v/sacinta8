<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProyectosInvestigacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyectos_investigacions', function (Blueprint $table) {
            $table->increments('proyectosInvestigacionId');
            $table->string('piTema', 45);
            $table->integer('piOculto');
            $table->integer('piAccion');
            $table->date('pifecha');
            $table->string('piuser', 45);
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
        Schema::dropIfExists('proyectos_investigacions');
    }
}
