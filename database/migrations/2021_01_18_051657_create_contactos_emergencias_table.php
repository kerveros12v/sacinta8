<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactosEmergenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contactos_emergencias', function (Blueprint $table) {
            $table->increments('contactosEmergenciaId');
            $table->string('nombreContactoEmergencia', 120);
            $table->string('numeroContactosEmergencia', 10);
            $table->integer('estudiantes_numeroIdentificacion'); //Cambiar a codigo del estudiante
            $table->integer('parentescos_idParentescos');
            $table->integer('contactosperiodo');
            $table->integer('contactosemergenciaOculto');
            $table->integer('contactosemergenciaAccion');
            $table->date('contactosemergenciafecha');
            $table->string('contactosemergenciauser', 45);
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
        Schema::dropIfExists('contactos_emergencias');
    }
}
