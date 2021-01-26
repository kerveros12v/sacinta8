<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstitucionDondeCursaEstudiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('institucion_donde_cursa_estudios', function (Blueprint $table) {
            $table->increments('idceId');
            $table->string('idcedetalle', 100);
            $table->integer('idceoculto');
            $table->integer('idceaccion');
            $table->date('idcefecha');
    $table->string('idceuser', 45);
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
        Schema::dropIfExists('institucion_donde_cursa_estudios');
    }
}
