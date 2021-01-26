<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProvinciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('provincias', function (Blueprint $table) {
            $table->increments('provinciaId');
            $table->string('provinciacodigo', 6);
            $table->string('provincia', 45);
            $table->integer('provinciapais');
            $table->integer('provinciaOculto');
            $table->integer('provinciaAccion');
            $table->date('provinciafecha');
            $table->string('provinciauser', 45);
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
        Schema::dropIfExists('provincias');
    }
}
