<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParroquiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parroquias', function (Blueprint $table) {
            $table->increments('idparroquias');
            $table->string('parroquiascodigo',10);
            $table->string('parroquia',125);
            $table->integer('parroquiasCanton');
            $table->integer('parroquiaOculto');
            $table->integer('parroquiaAccion');
            $table->date('parroquiafecha');
            $table->string('parroquiasUsuario',45);
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
        Schema::dropIfExists('parroquias');
    }
}
