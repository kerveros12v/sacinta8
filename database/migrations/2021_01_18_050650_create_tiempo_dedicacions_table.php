<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTiempoDedicacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tiempo_dedicacions', function (Blueprint $table) {
            $table->increments('tiempoDedicacionId');
            $table->integer('tiempodedicacioncodigo');
            $table->string('tiempoDedicacion', 45);
            $table->integer('tiempodedicacionOculto');
            $table->integer('tiempodedicacionAccion');
            $table->date('tiempodedicacionfecha');
            $table->string('tiempodedicacionuser', 45);
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
        Schema::dropIfExists('tiempo_dedicacions');
    }
}
