<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBonoDesarrollosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bono_desarrollos', function (Blueprint $table) {
            $table->increments('bonoDesarrolloId');
            $table->integer('bonodesarrollocodigo');
            $table->string('bonoDesarrollo', 45);
            $table->integer('bonodesarrolloOculto');
            $table->integer('bonodesarrolloAccion');
            $table->date('bonodesarrollofecha');
            $table->string('bonodesarrollouser', 45);
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
        Schema::dropIfExists('bono_desarrollos');
    }
}
