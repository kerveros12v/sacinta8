<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVinculacionSociedadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vinculacion_sociedads', function (Blueprint $table) {
            $table->increments('inculaciocionSociedadId');
            $table->integer('matriculas_matriculasId');
            $table->integer('docentes_nI');
            $table->integer('proyectosmacro_id');
            $table->integer('empresas_empresasId');
            $table->integer('tapv_Id');
            $table->integer('pappvs_id');
            $table->integer('numProyecto');
            $table->string('proyectoMicro', 200);
            $table->string('objetivoProyecto', 45);
            $table->date('fechaInicioProyecto');
            $table->date('fechaFinProyecto');
            $table->date('fechaPrecentacionProyecto');
            $table->integer('numeroHorasProyecto');
            $table->double('notaTutor');
            $table->double('notauvcom');
            $table->string('notaVinculacion', 15);
            $table->integer('fisico');
            $table->integer('digital');
            $table->integer('certificado');
            $table->string('vinculacion', 100);
            $table->integer('vsOculto');
            $table->integer('vsAccion');
            $table->date('vsfecha');
            $table->string('vsuser', 45);
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
        Schema::dropIfExists('vinculacion_sociedads');
    }
}
