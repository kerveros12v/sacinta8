<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipoColegiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_colegios', function (Blueprint $table) {
            $table->increments('tipoColegioId');
            $table->string('tipocolegiocodigo', 4);
            $table->string('tipoColegio', 45);
            $table->integer('tipocolegioOculto');
            $table->integer('tipocolegioAccion');
            $table->date('tipocolegiofecha');
            $table->string('tipocolegiouser', 45);
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
        Schema::dropIfExists('tipo_colegios');
    }
}
