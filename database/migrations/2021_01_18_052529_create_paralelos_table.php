<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParalelosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paralelos', function (Blueprint $table) {
            $table->increments('paraleloId');
            $table->string('paralelocodigo',3);
            $table->string('paralelo',3);
            $table->integer('paraleloOculto');
            $table->integer('paraleloAccion');
            $table->date('paralelofecha');
            $table->string('paralelouser',45);
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
        Schema::dropIfExists('paralelos');
    }
}
