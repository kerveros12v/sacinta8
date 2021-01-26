<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSetecAspirantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('setec_aspirantes', function (Blueprint $table) {
            $table->increments('said');
            $table->string('sanumidentificacion', 10);
            $table->string('saprimerapellido', 60);
            $table->string('segundoapellido', 60);
            $table->string('primernombre', 60);
            $table->string('segundonombre', 60);
            $table->date('fechanacimientosa');
            $table->integer('fkgenerosa');
            $table->integer('fkformacionArtesano');
            $table->integer('instruccionRegistroCivil');
            $table->string('sainstriccionseleccionada', 100);
            $table->integer('parroquiasa');
            $table->string('sadireccion', 100);
            $table->string('sacorreoelectronico', 60);
            $table->string('satelefono', 10);
            $table->string('sacelular', 10);
            $table->integer('fktipodiscapacidadsa');
            $table->integer('fksocioempleosa');
            $table->integer('fkaccesodepartamento');
            $table->integer('setecaspiranteOculto');
            $table->integer('setecaspiranteAccion');
            $table->date('setecaspirantefecha');
            $table->string('saaspiranteuser', 45);
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
        Schema::dropIfExists('setec_aspirantes');
    }
}
