<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstaEnPeriodoSabaticosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('esta_en_periodo_sabaticos', function (Blueprint $table) {
            $table->increments('epsid');
            $table->string('eps', 2);
            $table->integer('epsoculto');
            $table->integer('epsaccion');
            $table->date('epsfecha');
            $table->string('epsuser', 45);
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
        Schema::dropIfExists('esta_en_periodo_sabaticos');
    }
}
