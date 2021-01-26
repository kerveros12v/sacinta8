<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTerceraRazonBecasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tercera_razon_becas', function (Blueprint $table) {
            $table->increments('terceraRazonBecaId');
            $table->integer('tercerarazonbecacodigo');
            $table->string('terceraRazonBeca', 20);
            $table->integer('tercerarazonbecabool');
            $table->integer('tercerarazonbecaOculto');
            $table->integer('tercerarazonbecaAccion');
            $table->date('tercerarazonbecafecha');
            $table->string('tercerarazonbecauser', 45);
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
        Schema::dropIfExists('tercera_razon_becas');
    }
}
