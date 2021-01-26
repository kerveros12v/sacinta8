<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTiposSangresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipos_sangres', function (Blueprint $table) {
            $table->increments('tipoSangreId');
            $table->integer('tipossangrescodigo');
            $table->string('tipoSangre', 3);
            $table->integer('tipossangreOculto');
            $table->integer('tipossangreAccion');
            $table->date('tipossangrefecha');
            $table->string('tipossangreuser', 45);
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
        Schema::dropIfExists('tipos_sangres');
    }
}
