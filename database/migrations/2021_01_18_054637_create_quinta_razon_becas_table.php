<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuintaRazonBecasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quinta_razon_becas', function (Blueprint $table) {
            $table->increments('qrbid');
            $table->integer('qrbcodigo');
            $table->string('quintaRazonBeca', 20);
            $table->integer('qrbbool');
            $table->integer('qrboculto');
            $table->integer('qrbaccion');
            $table->date('qrbfecha');
            $table->string('qrbuser', 45);
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
        Schema::dropIfExists('quinta_razon_becas');
    }
}
