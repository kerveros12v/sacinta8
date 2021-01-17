<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSexosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sexos', function (Blueprint $table) {
            $table->increments('sexoId');
            $table->integer('sexocodigo');
            $table->string('sexo', 10);
            $table->integer('sexoOculto');
            $table->integer('sexoAccion');
            $table->date('sexofecha');
            $table->string('sexouser', 45);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sexos');
    }
}
