<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFinanciamientoBecaDocentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('financiamiento_beca_docentes', function (Blueprint $table) {
            $table->increments('financiamientoBecaId');
            $table->string('financiamientobecadocentescodigo', 4);
            $table->string('financiamientoBeca', 25);
            $table->integer('financiamientobecadocentesOculto');
            $table->integer('financiamientobecadocentesAccion');
            $table->date('financiamientobecadocentesfecha');
            $table->string('financiamientobecadocentesuser', 45);
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
        Schema::dropIfExists('financiamiento_beca_docentes');
    }
}
