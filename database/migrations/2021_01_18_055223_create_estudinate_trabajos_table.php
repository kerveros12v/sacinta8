<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstudinateTrabajosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudinate_trabajos', function (Blueprint $table) {
            $table->increments('etid');
            $table->string('nomempresa', 150);
            $table->integer('fksectoreconomico');
            $table->integer('fkestudinatet');
            $table->integer('fkperiodo');
            $table->integer('etoculto');
            $table->integer('etaccion');
            $table->date('etfecha');
            $table->string('etuser', 45);
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
        Schema::dropIfExists('estudinate_trabajos');
    }
}
