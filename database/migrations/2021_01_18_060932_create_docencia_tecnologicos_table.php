<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocenciaTecnologicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('docencia_tecnologicos', function (Blueprint $table) {
            $table->increments('docenciaTecnologicoId');
            $table->string('docenciatecnologicocodigo',4);
            $table->string('docenciaTecnologico', 4);
            $table->integer('docenciatecnologicoOculto');
            $table->integer('docenciatecnologicoAccion');
            $table->date('docenciatecnologicofecha');
            $table->string('docenciatecnologicouser', 45);
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
        Schema::dropIfExists('docencia_tecnologicos');
    }
}
