<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dias', function (Blueprint $table) {
            $table->increments('idDias');
            $table->string('dia', 15);
            $table->integer('diasOculto');
            $table->integer('diasAccion');
            $table->date('diasfecha');
            $table->string('diasuser', 45);
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
        Schema::dropIfExists('dias');
    }
}
