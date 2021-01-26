<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParticipaProyectoVinculacionSociedadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('participa_proyecto_vinculacion_sociedads', function (Blueprint $table) {
            $table->increments('ppvsid');
            $table->string('ppvs', 10);
            $table->integer('ppvsOculto');
            $table->integer('ppvsAccion');
            $table->date('ppvsfecha');
            $table->string('ppvsuser', 45);
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
        Schema::dropIfExists('participa_proyecto_vinculacion_sociedads');
    }
}
