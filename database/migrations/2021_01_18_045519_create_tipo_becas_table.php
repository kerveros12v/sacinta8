<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipoBecasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_becas', function (Blueprint $table) {
            $table->increments('tipoBecaId');
            $table->integer('tipobecacodigo');
            $table->string('tipoBeca', 10);
            $table->integer('tipobecabool');
            $table->integer('tipobecaOculto');
            $table->integer('tipobecaAccion');
            $table->date('tipobecafecha');
            $table->string('tipobecauser', 45);
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
        Schema::dropIfExists('tipo_becas');
    }
}
