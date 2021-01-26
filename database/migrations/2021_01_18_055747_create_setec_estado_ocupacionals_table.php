<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSetecEstadoOcupacionalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('setec_estado_ocupacionals', function (Blueprint $table) {
            $table->increments('seoId');
            $table->integer('seocodigo');
            $table->string('seoestadoocupacional', 100);
            $table->integer('seoOculto');
            $table->integer('seoAccion');
            $table->date('seofecha');
            $table->string('seouser', 45);
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
        Schema::dropIfExists('setec_estado_ocupacionals');
    }
}
