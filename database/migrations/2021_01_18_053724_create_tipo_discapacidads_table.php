<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipoDiscapacidadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_discapacidads', function (Blueprint $table) {
            $table->increments('tipoDiscapacidadid');
            $table->string('tdcodigo', 6);
            $table->string('tipoDiscapacidad', 45);
            $table->integer('tipodiscapacidadbool');
            $table->integer('tdOculto');
            $table->integer('tdAccion');
            $table->date('tdfecha');
            $table->string('tduser', 45);
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
        Schema::dropIfExists('tipo_discapacidads');
    }
}
