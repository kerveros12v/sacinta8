<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAccesoDepartamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acceso_departamentos', function (Blueprint $table) {
            $table->increments('idaccesodepartamento');
            $table->string('accesodepartamentocodigo', 5);
            $table->integer('departamentos_iddepartamentos');
            $table->integer('tipousuario_idtipousuario');
            $table->integer('accesodepartamentoAccion');
            $table->integer('accesodepartamentoOculto');
            $table->date('accesodepartamentoFecha');
            $table->string('accesodepartamentoUser', 45);
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
        Schema::dropIfExists('acceso_departamentos');
    }
}
