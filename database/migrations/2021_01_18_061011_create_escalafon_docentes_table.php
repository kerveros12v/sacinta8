<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEscalafonDocentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('escalafon_docentes', function (Blueprint $table) {
            $table->increments('escalafonDocenteId');
            $table->string('escalafondocentecodigo', 4);
            $table->string('escalafonDocente', 45);
            $table->integer('escalafondocenteOculto');
            $table->integer('escalafondocenteAccion');
            $table->date('escalafondocentefecha');
            $table->string('escalafondocenteuser', 45);
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
        Schema::dropIfExists('escalafon_docentes');
    }
}
