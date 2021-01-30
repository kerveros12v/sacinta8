<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocenteEstudiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('docente_estudios', function (Blueprint $table) {
            $table->increments('iddocente_estudios');
            $table->integer('fkdocentes');
            $table->integer('fkDPaisEstudiosId');
            $table->string('tituloAObtener', 50);
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
        Schema::dropIfExists('docente_estudios');
    }
}
