<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSetecEncuestadorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('setec_encuestadors', function (Blueprint $table) {
            $table->increments('seid');
            $table->string('senumidentificacion', 10);
            $table->string('senombre', 120);
            $table->integer('fketniase');
            $table->string('seperfil', 250);
            $table->integer('seOculto');
            $table->integer('seAccion');
            $table->date('sefecha');
            $table->string('seuser', 45);
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
        Schema::dropIfExists('setec_encuestadors');
    }
}
