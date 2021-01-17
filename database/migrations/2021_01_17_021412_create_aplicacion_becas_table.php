<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAplicacionBecasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aplicacion_becas', function (Blueprint $table) {
            $table->increments('idAplicacionBecas');
            $table->string('aplicacionbecascodigo');
            $table->integer('fktipoBecaId');
            $table->integer('fkfinanciamientoBecaid');
            $table->integer('montoBeca');
            $table->integer('porcientoBecaCoberturaManuntencion');
            $table->integer('porcientoBecaCoberturaArancel');
            $table->integer('fkprimeraRazonBecaId');
            $table->integer('fksegundaRazonBecaId');
            $table->integer('fkterceraRazonBecaId');
            $table->integer('fkcuartaRazonBecaId');
            $table->integer('fkquintaRazonBecaId');
            $table->integer('fksextaRazonBecaId');
            $table->string('fknumeroIdentificacion');
            $table->date('abfechainicio');
            $table->date('abfechafin');
            $table->integer('abperiodo');
            $table->string('abobservaciones');
            $table->integer('abactivo');
            $table->integer('aplicacionbecasOculto');
            $table->integer('aplicacionbecasAccion');
            $table->date('aplicacionbecasfecha');
            $table->string('aplicacionbecasuser');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aplicacion_becas');
    }
}
