<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCicloPeriodosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ciclo_periodos', function (Blueprint $table) {
            $table->increments('idcicloperiodo');
            $table->string('cicloperiodocodigo', 11);
            $table->string('ciclo', 45);
            $table->integer('cicloperiodoOculto');
            $table->integer('cicloperiodoAccion');
            $table->date('cicloperiodofecha');
            $table->string('cicloperiodouser', 45);
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
        Schema::dropIfExists('ciclo_periodos');
    }
}
