<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDistributivosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('distributivos', function (Blueprint $table) {
            $table->increments('distributivosId');
            $table->string('distributivosNumero', 11);
            $table->date('fechaVinculacion');
            $table->integer('numeroHorasClaseSemanales');
            $table->integer('numeroHorasAcademicas');
            $table->integer('numeroHorasInvestigacion');
            $table->integer('numeroHorasGestionDireccionAcacemica');
            $table->string('distributivosTotalHoras', 45);
            $table->string('docentes_numeroIdentificacion', 10);
            $table->integer('titulosprofecionales_TituloProfecionalId');
            $table->integer('gradosocupacionales_gradoOcupacionalId');
            $table->integer('tiempodedicacion_tiempoDedicacionId');
            $table->integer('proyectosinvestigacion_ProyectosInvestigacionId');
            $table->integer('distributivosOculto');
            $table->integer('distributivosAccion');
            $table->date('distributivosfecha');
            $table->string('distributivosuser', 45);
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
        Schema::dropIfExists('distributivos');
    }
}
