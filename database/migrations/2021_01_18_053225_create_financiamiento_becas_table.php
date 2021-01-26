<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFinanciamientoBecasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('financiamiento_becas', function (Blueprint $table) {
            $table->increments('financiamientoBecaid');
            $table->string('financiamientobecacodigo', 6);
            $table->string('financiamientoBeca', 45);
            $table->integer('financiamientobecabool');
            $table->integer('financiamientobecaOculto');
            $table->integer('financiamientobecaAccion');
            $table->date('financiamientobecafecha');
            $table->string('financiamientobecauser', 45);
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
        Schema::dropIfExists('financiamiento_becas');
    }
}
