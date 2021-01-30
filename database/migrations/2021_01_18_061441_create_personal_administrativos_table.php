<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonalAdministrativosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal_administrativos', function (Blueprint $table) {
            $table->increments('idpersonalAdministrativo');
            $table->integer('fkpnumeroIdentificacion');
            $table->string('direccionDomiciliaria', 150);
            $table->integer('provinciaSufragio');
            $table->string('numeroCelular', 10);
            $table->string('correoElectronico', 60);
            $table->string('numDomicilio', 6);
            $table->integer('porcentajeDiscapacidad');
            $table->string('numCarnetDiscapacidad', 7);
            $table->integer('tipoDiscapacidadid');
            $table->integer('tipoEnfermedadCatastroficaId');
            $table->integer('tipoPersonalAdministrativo');
            $table->date('fechaIngresoIES');
            $table->date('fechaSalidaIES');
            $table->integer('relacionLaboralIESId');
            $table->integer('ingresoConConcursoMeritos');
            $table->integer('nroHorasLaborablesSemana');
            $table->integer('salarioMensual');
            $table->integer('personalaOculto');
            $table->integer('personalaAccion');
            $table->date('personalafecha');
            $table->string('personalauser', 45);
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
        Schema::dropIfExists('personal_administrativos');
    }
}
