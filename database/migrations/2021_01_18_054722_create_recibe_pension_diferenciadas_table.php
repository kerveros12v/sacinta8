<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecibePensionDiferenciadasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recibe_pension_diferenciadas', function (Blueprint $table) {
            $table->increments('rpdId');
            $table->integer('rpdcodigo');
            $table->string('recibePensionDiferenciada',10);
            $table->integer('rpdoculto');
            $table->integer('rpdaccion');
            $table->date('rpdfecha');
            $table->string('rpduser',45);
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
        Schema::dropIfExists('recibe_pension_diferenciadas');
    }
}
