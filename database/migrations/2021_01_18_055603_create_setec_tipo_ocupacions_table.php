<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSetecTipoOcupacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('setec_tipo_ocupacions', function (Blueprint $table) {
            $table->increments('stoid');
            $table->string('stocodigo', 45);
            $table->string('stotipoOcupacion', 100);
            $table->integer('stooculto');
            $table->integer('stoaccion');
            $table->date('stofecha');
            $table->string('stouser', 45);
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
        Schema::dropIfExists('setec_tipo_ocupacions');
    }
}
