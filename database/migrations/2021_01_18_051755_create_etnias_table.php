<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEtniasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('etnias', function (Blueprint $table) {
            $table->increments('etniaId');
            $table->integer('etniascodigo');
            $table->string('etnia', 45);
            $table->integer('etniasOculto');
            $table->integer('etniasAccion');
            $table->date('etniasfecha');
            $table->string('etniasuser', 45);
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
        Schema::dropIfExists('etnias');
    }
}
