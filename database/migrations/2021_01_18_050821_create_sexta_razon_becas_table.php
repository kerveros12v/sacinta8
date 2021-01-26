<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSextaRazonBecasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sexta_razon_becas', function (Blueprint $table) {
            $table->increments('sextaRazonBecaId');
            $table->string('sextaRazonBeca', 20);
            $table->integer('sextarazonbecacodigo');
            $table->integer('sextarazonbecabool');
            $table->integer('sextarazonbecaOculto');
            $table->integer('sextarazonbecaAccion');
            $table->date('sextarazonbecafecha');
            $table->string('sextarazonbecauser', 45);
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
        Schema::dropIfExists('sexta_razon_becas');
    }
}
