<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCantonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cantons', function (Blueprint $table) {
            $table->increments('cantonId');
            $table->string('cantoncodigo', 45);
            $table->string('canton', 60);
            $table->integer('cantonprovincia');
            $table->integer('cantonOculto');
            $table->integer('cantonAccion');
            $table->date('cantonfecha');
            $table->string('cantonuser', 45);
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
        Schema::dropIfExists('cantons');
    }
}
