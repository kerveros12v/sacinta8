<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateColegiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('colegios', function (Blueprint $table) {
            $table->increments('idColegios');
            $table->integer('colegioscodigo');
            $table->string('colegio', 125);
            $table->integer('canton_cantonId');
            $table->integer('tipoColegio_tipoColegioId');
            $table->integer('colegiosOculto');
            $table->integer('colegiosAccion');
            $table->date('colegiosfecha	date');
            $table->string('colegiosuser', 45);
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
        Schema::dropIfExists('colegios');
    }
}
