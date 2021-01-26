<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCalendariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('calendarios', function (Blueprint $table) {
            $table->increments('idcalendario');
            $table->string('calendariocodigo',45);
            $table->string('calendarioactividades',250);
            $table->date('calendariofechaactividad');
            $table->string('calendarioTipo',45);
            $table->string('calendariomoduloactivo',100);
            $table->integer('calendariooculto');
            $table->integer('calendarioaccion');
            $table->date('calendariofecha');
            $table->string('calendariouser',45);
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
        Schema::dropIfExists('calendarios');
    }
}
