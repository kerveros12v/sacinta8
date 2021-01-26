<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHaRepetidoAlmenosUnaMateriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ha_repetido_almenos_una_materias', function (Blueprint $table) {
            $table->increments('hranumid');
            $table->integer('hranumcodigo');
            $table->string('haRepetidoAlMenosUnaMateria',10);
            $table->integer('hranumoculto');
            $table->integer('hranumaccion');
            $table->date('hranumfecha');
            $table->string('hranumuser',45);
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
        Schema::dropIfExists('ha_repetido_almenos_una_materias');
    }
}
