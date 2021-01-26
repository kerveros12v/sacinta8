<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiscapacidadEstudiantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('discapacidad_estudiantes', function (Blueprint $table) {
            $table->increments('deid');
            $table->string('carnetconadis', 7);
            $table->integer('fkestudiantede');
            $table->integer('fktipodiscapacidadde');
            $table->integer('deporcentaje');
            $table->integer('deperiodo');
            $table->integer('deoculto');
            $table->integer('deaccion');
            $table->date('defecha');
            $table->string('deuser', 45);
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
        Schema::dropIfExists('discapacidad_estudiantes');
    }
}
