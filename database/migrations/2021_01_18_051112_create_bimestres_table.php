<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBimestresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bimestres', function (Blueprint $table) {
            $table->increments('idBimestres');
            $table->integer('bimestrescodigo');
            $table->string('bimestre', 45);
            $table->integer('bimestresOculto');
            $table->integer('bimestresAccion');
            $table->date('bimestresfecha');
            $table->string('bimestresuser', 45);
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
        Schema::dropIfExists('bimestres');
    }
}
