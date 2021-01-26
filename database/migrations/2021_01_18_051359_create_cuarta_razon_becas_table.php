<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCuartaRazonBecasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cuarta_razon_becas', function (Blueprint $table) {
            $table->increments('cuartaRazonBecaId');
            $table->integer('cuartarazonbecacodigo');
            $table->string('cuartaRazonBeca', 45);
            $table->tinyInteger('cuartarazonbecabool');
            $table->integer('cuartarazonbecaOculto');
            $table->integer('cuartarazonbecaAccion');
            $table->date('cuartarazonbecafecha');
            $table->string('cuartarazonbecauser', 45);
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
        Schema::dropIfExists('cuarta_razon_becas');
    }
}
