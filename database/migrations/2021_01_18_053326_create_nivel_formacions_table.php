<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNivelFormacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nivel_formacions', function (Blueprint $table) {
            $table->increments('nivelFormacionId');
            $table->integer('codigonivelFormacion');
            $table->string('nivelFormacion', 45);
            $table->string('nivelInstruccion', 45);
            $table->integer('nivelformacionOculto');
            $table->integer('nivelformacionAccion');
            $table->date('nivelformacionfecha');
            $table->string('nivelformacionuser', 45);
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
        Schema::dropIfExists('nivel_formacions');
    }
}
