<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHaPerdidoLaGratuidadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ha_perdido_la_gratuidads', function (Blueprint $table) {
            $table->increments('hplgid');
            $table->string('hplgcodigo');
            $table->string('haperdidolagratuidad', 10);
            $table->integer('hplgoculto');
            $table->integer('hplgaccion');
            $table->date('hplgfecha');
            $table->string('hplguser', 45);
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
        Schema::dropIfExists('ha_perdido_la_gratuidads');
    }
}
