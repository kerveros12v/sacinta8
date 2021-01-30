<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('docentes', function (Blueprint $table) {
            $table->increments('iddocente');
            $table->string('codigodocente');
            $table->integer('fkDnumeroIdentificacion');
            $table->string('direccionDomiciliaria', 150);
            $table->string('numeroCelular', 10);
            $table->string('correoElectronico', 30);
            $table->string('numDomicilio', 7);
            $table->date('fechaIngresoIES');
            $table->date('fechaSalidaIES');
            $table->string('nombreUnidadAcademica', 50);
            $table->integer('nroasignaturasdocente');
            $table->integer('nroHorasLaborablesSemanaEnCarreraPrograma');
            $table->integer('nroHorasClaseSemanaCarreraPrograma');
            $table->integer('nroHorasInvestigacionSemanaCarreraPrograma');
            $table->integer('nroHorasAdministrativasSemanaCarreraPrograma');
            $table->integer('nroHorasOtrasActividadesSemanaCarreraPrograma');
            $table->integer('nroHorasVinculacionSociedad');
            $table->integer('salarioMensual');
            $table->string('fechaInicioPeriodoSabatico', 10);
            $table->integer('fkDProvinciaSufragio');
            $table->integer('fkDTipoEnfermedadCatastroficaId');
            $table->integer('fkDRelacionLaboralIESId');
            $table->integer('fkDEscalafonDocenteId');
            $table->integer('fkDIngresoConConcursoMeritosId');
            $table->integer('fkDCargoDirectivoId');
            $table->integer('fkDDocenciaTecnicoSuperiorId');
            $table->integer('fkDDocenciaTecnologicoId');
            $table->integer('fkDEstaEnPeriodoSabaticoId');
            $table->integer('fkDEstaCursandoEstudiosId');
            $table->integer('fkDInstitucionDondeCursaEstudiosId');
            $table->integer('fkDniveDeFormacionId');
            $table->integer('docentesOculto');
            $table->integer('docentesAccion');
            $table->date('docentesfecha');
            $table->string('docentesuser', 45);
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
        Schema::dropIfExists('docentes');
    }
}
