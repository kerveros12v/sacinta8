<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipoUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_usuarios', function (Blueprint $table) {
            $table->increments('idtipousuario');
            $table->string('tipousuariocodigo', 4);
            $table->string('tipousuario', 45);
            $table->integer('tipousuariopemisos');
            $table->integer('tipousuarioOculto');
            $table->integer('tipousuarioAccion');
            $table->date('tipousuariofecha');
            $table->string('tipousuariouser', 45);
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
        Schema::dropIfExists('tipo_usuarios');
    }
}
