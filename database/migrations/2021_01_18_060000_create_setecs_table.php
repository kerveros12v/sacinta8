<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSetecsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('setecs', function (Blueprint $table) {
            $table->increments('idsetec');
            $table->integer('fksetecAspirante');
            $table->integer('fksetecEncuestador');
            $table->integer('fksetecCertificacion');
            $table->integer('fkseteccondiciondevida');
            $table->integer('fkseteccondicionlaboral');
            $table->integer('fksecestadocertificacion');
            $table->integer('setecOculto');
            $table->integer('setecAccion');
            $table->date('setecfecha');
            $table->string('setecuser', 45);
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
        Schema::dropIfExists('setecs');
    }
}
