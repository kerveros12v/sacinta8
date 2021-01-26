<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstudianteTituloTercerNivelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudiante_titulo_tercer_nivels', function (Blueprint $table) {
            $table->increments('ettnid');
            $table->integer('fkestudiantesettn');
            $table->integer('fktitulotercernivelettn');
            $table->integer('ettnoculto');
            $table->integer('ettnaccion');
            $table->date('ettnfecha');
            $table->string('ettnuser', 45);
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
        Schema::dropIfExists('estudiante_titulo_tercer_nivels');
    }
}
