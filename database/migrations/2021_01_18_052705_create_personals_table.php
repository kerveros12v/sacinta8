<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personals', function (Blueprint $table) {
            $table->increments('personalid');
            $table->integer('tipodocumentoId');
            $table->string('personalcodigo', 10);
            $table->string('numeroIdentificacion', 10);
            $table->string('primerApellido', 60);
            $table->string('segundoApellido', 60);
            $table->string('primerNombre', 60);
            $table->string('segundoNombre', 60);
            $table->integer('fksexo');
            $table->integer('fkgenero');
            $table->integer('fkestadocivil');
            $table->integer('fkpueblonacionalidad');
            $table->date('fechaNacimiento');
            $table->integer('fkpaisNacionalidad');
            $table->integer('fkaccesodepartamento');
            $table->string('usuarioPersonal', 45);
            $table->string('passwordPersonal', 45);
            $table->integer('personalOculto');
            $table->integer('personalAccion');
            $table->date('personalfecha');
            $table->string('personaluser', 45);
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
        Schema::dropIfExists('personals');
    }
}
