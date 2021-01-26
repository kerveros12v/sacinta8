<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCargoGestionDireccionAcademicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cargo_gestion_direccion_academicos', function (Blueprint $table) {
            $table->increments('cgdaId');
            $table->string('cgdacodigo', 6);
            $table->string('cargo', 100);
            $table->integer('fkcargoDirectivoId');
            $table->integer('cgdaOculto');
            $table->integer('cgdaAccion');
            $table->integer('cgdafecha');
            $table->string('cgdauser', 45);
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
        Schema::dropIfExists('cargo_gestion_direccion_academicos');
    }
}
