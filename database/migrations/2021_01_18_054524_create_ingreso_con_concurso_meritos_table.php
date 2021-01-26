<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIngresoConConcursoMeritosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ingreso_con_concurso_meritos', function (Blueprint $table) {
            $table->increments('iccmId');
            $table->integer('iccmcodigo');
            $table->string('iccmdetalle',4);
            $table->integer('iccmoculto');
            $table->integer('iccmaccion');
            $table->date('iccmfecha');
            $table->string('iccmuser',45);
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
        Schema::dropIfExists('ingreso_con_concurso_meritos');
    }
}
