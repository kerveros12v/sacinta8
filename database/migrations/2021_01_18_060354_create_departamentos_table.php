<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepartamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('departamentos', function (Blueprint $table) {
            $table->increments('iddepartamentos');
            $table->string('departamento', 45);
            $table->string('departamentosSubdivision', 45);
            $table->string('url	varchar', 45);
            $table->integer('departamentosparametro');
            $table->integer('departamentosOculto');
            $table->integer('departamentosAccion');
            $table->date('departamentosfecha');
            $table->string('departamentosuser', 45);
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
        Schema::dropIfExists('departamentos');
    }
}
