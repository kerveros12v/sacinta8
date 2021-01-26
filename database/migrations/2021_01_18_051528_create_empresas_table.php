<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresas', function (Blueprint $table) {
            $table->increments('empresasId');
            $table->string('nombreEmpresaInstitucion', 125);
            $table->string('ubicacion', 100);
            $table->string('representanteLega', 120);
            $table->string('noInformeTecnicodeViabilidad', 45);
            $table->date('fechaInformeTecnicodeViabilidad');
            $table->string('noDeConvenio', 45);
            $table->date('fechaConvenio');
            $table->string('contactoEmpresa', 45);
            $table->string('correoEmpresas', 100);
            $table->string('departamentocoodinador', 45);
            $table->integer('empresasOculto');
            $table->integer('empresasAccion');
            $table->date('empresasfecha');
            $table->string('empresasuser', 45);
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
        Schema::dropIfExists('empresas');
    }
}
