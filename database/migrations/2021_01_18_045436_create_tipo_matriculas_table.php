<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipoMatriculasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_matriculas', function (Blueprint $table) {
            $table->increments('tipoMatriculaId');
            $table->integer('tipomatriculacodigo');
            $table->string('tipoMatricula', 45);
            $table->integer('tipomatriculaOculto');
            $table->integer('tipomatriculaAccion');
            $table->date('tipomatriculafecha');
            $table->string('tipomatriculauser', 45);
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
        Schema::dropIfExists('tipo_matriculas');
    }
}
