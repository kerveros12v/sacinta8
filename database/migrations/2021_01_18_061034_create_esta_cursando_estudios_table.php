<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstaCursandoEstudiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('esta_cursando_estudios', function (Blueprint $table) {
            $table->increments('eceid');
            $table->string('ececodigo');
            $table->string('ece',60);
            $table->integer('eceoculto');
            $table->integer('eceaccion');
            $table->date('ecefecha');
            $table->string('eceuser',45);
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
        Schema::dropIfExists('esta_cursando_estudios');
    }
}
