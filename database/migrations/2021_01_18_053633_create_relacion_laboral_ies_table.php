<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRelacionLaboralIesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('relacion_laboral_ies', function (Blueprint $table) {
            $table->increments('relacionLaboralIESId');
            $table->integer('relacionlaboraliescodigo');
            $table->string('relacionLaboralIES', 45);
            $table->integer('relacionlaboraliesOculto');
            $table->integer('relacionlaboraliesAccion');
            $table->date('relacionlaboraliesfecha');
            $table->string('relacionlaboraliesuser', 45);
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
        Schema::dropIfExists('relacion_laboral_ies');
    }
}
