<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstitutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('institutos', function (Blueprint $table) {
            $table->increments('institutosId');
            $table->integer('institutoscodigo');
            $table->string('institutoNombre', 160);
            $table->integer('fkcanton');
            $table->integer('fkidSostenimiento');
            $table->integer('institutosOculto');
            $table->integer('institutosAccion');
            $table->date('institutosfecha');
            $table->string('institutosuser', 45);
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
        Schema::dropIfExists('institutos');
    }
}
