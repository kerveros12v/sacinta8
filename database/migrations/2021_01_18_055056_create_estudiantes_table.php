<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstudiantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudiantes', function (Blueprint $table) {
            $table->increments('estid');
            $table->integer('fktipodocumentoId');
            $table->string('numeroIdentificacion', 10);
            $table->string('primerApellido', 60);
            $table->string('segundoApellido', 60);
            $table->string('primerNombre', 60);
            $table->string('segundoNombre', 60);
            $table->integer('fksexoId');
            $table->integer('fkGeneroId');
            $table->integer('fkEstadoCivilId');
            $table->integer('fkPuebloNacionalidadId');
            $table->integer('fkTipoSangreId');
            $table->date('fechaNacimiento');
            $table->integer('fkCantonNacimientoId');
            $table->string('correoElectronico', 60);
            $table->string('numeroCelular', 10);
            $table->string('numeroComvencional', 10);
            $table->string('usuarioEstudiantes', 45);
            $table->string('passwordEstudiantes', 100);
            $table->integer('fkcategoriaMigratoria');
            $table->integer('fkiomas');
            $table->integer('accesodepartamento_codigo');
            $table->longText('estimg');//	longblob
            $table->integer('estoculto');
            $table->integer('estaccion');
            $table->date('estfecha');
            $table->string('estuser', 45);
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
        Schema::dropIfExists('estudiantes');
    }
}
