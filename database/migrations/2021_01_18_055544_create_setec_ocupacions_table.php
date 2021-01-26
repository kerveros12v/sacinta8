<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSetecOcupacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('setec_ocupacions', function (Blueprint $table) {
            $table->increments('soId');
            $table->integer('fkaspiranteso');
            $table->integer('fktipoOcupacionso');
            $table->string('soocupacionAsignada', 100);
            $table->integer('fkestadoocupacionalso');
            $table->integer('sohoratrabajadaxsemana');
            $table->string('fkareadepartamentoso', 100);
            $table->integer('sooculto');
            $table->integer('soaccion');
            $table->date('sofecha');
            $table->string('souser', 45);
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
        Schema::dropIfExists('setec_ocupacions');
    }
}
