<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSegundaRazonBecasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('segunda_razon_becas', function (Blueprint $table) {
            $table->increments('srbId');
            $table->integer('srbcodigo');
            $table->string('segundaRazonBeca',20);
            $table->integer('srbbool');
            $table->integer('srboculto');
            $table->integer('srbaccion');
            $table->date('srbfecha');
            $table->string('srbuser',45);
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
        Schema::dropIfExists('segunda_razon_becas');
    }
}
