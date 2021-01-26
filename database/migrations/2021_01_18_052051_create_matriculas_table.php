<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatriculasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matriculas', function (Blueprint $table) {
            $table->increments('matriculasId');
            $table->string('codigoMatricula', 10);
            $table->date('fechaMatricula');
            $table->double('montoCreditoEducativo');
            $table->double('montoAyudaEconomica');
            $table->date('fechainicioCarrera');
            $table->integer('enumeroIdentificacion');
            $table->integer('ccarrerasId');
            $table->integer('jjornadaAcademicaId');
            $table->integer('pperiodoacademicoId');
            $table->integer('pparaleloId');
            $table->integer('ttipoMatriculaId');
            $table->integer('nnivelAcademicoQueCursaId');
            $table->integer('rrecibePensionDiferenciadaId');
            $table->integer('eestudianteOcupacionId');
            $table->integer('bbonoDesarrolloId');
            $table->integer('iingresosestudianteId');
            $table->integer('hhaRepetidoAlMenosUnaMateriaid');
            $table->integer('hhaPerdidoLaGratuidadId');
            $table->integer('ingresoTotalHogar');
            $table->integer('fkNivelFormacionMadre');
            $table->integer('fkNivelFormacionPadre');
            $table->integer('cantidadMiembrosHogar');
            $table->integer('matriculasOculto');
            $table->integer('matriculasAccion');
            $table->date('matriculasfecha');
            $table->string('matriculasuser', 45);
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
        Schema::dropIfExists('matriculas');
    }
}
