<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstudianteOcupacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudiante_ocupacions', function (Blueprint $table) {
            $table->increments('estudianteOcupacionId');
            $table->string('estudianteocupacioncodigo', 4);
            $table->string('estudianteOcupacion', 20);
            $table->integer('estudianteocupacionOculto');
            $table->integer('estudianteocupacionAccion');
            $table->date('estudianteocupacionfecha');
            $table->string('estudianteocupacionuser', 45);
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
        Schema::dropIfExists('estudiante_ocupacions');
    }
}
