<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipoAlcanceProyectoVinculacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_alcance_proyecto_vinculacions', function (Blueprint $table) {
            $table->increments('tipoAlcanceProyectoVinculacionId');
            $table->integer('tapvcodigo');
            $table->string('tapvVinculacion', 45);
            $table->integer('tapvOculto');
            $table->integer('tapvAccion');
            $table->date('tapvfecha');
            $table->string('tapvuser', 45);
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
        Schema::dropIfExists('tipo_alcance_proyecto_vinculacions');
    }
}
