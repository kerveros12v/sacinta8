<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntornoInstitucionalPracticaProfesionalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entorno_institucional_practica_profesionals', function (Blueprint $table) {
            $table->increments('eipid');
            $table->string('eipfcodigo', 4);
            $table->string('eipp', 12);
            $table->integer('eipfOculto');
            $table->integer('eipfAccion');
            $table->date('eipffecha');
            $table->string('eipfuser', 45);
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
        Schema::dropIfExists('entorno_institucional_practica_profesionals');
    }
}
