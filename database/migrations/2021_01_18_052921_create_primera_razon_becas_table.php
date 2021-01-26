<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrimeraRazonBecasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('primera_razon_becas', function (Blueprint $table) {
            $table->increments('prbId');
            $table->string('prbcodigo',4);
            $table->string('primeraRazonBeca',20);
            $table->integer('prbbool');
            $table->integer('prboculto');
            $table->integer('prbaccion');
            $table->date('prbfecha');
            $table->string('prbuser',45);
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
        Schema::dropIfExists('primera_razon_becas');
    }
}
