<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNumeroMatriculasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('numero_matriculas', function (Blueprint $table) {
            $table->increments('idnummatricula');
            $table->integer('nummatriculacodigo');
            $table->string('nummatricula', 45);
            $table->integer('nummatriculasOculto');
            $table->integer('nummatriculasAccion');
            $table->date('nummatriculasfecha');
            $table->string('nummatriculasuser', 45);
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
        Schema::dropIfExists('numero_matriculas');
    }
}
