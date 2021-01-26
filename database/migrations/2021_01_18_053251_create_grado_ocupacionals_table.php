<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGradoOcupacionalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grado_ocupacionals', function (Blueprint $table) {
            $table->increments('gradoOcupacionalId');
            $table->string('gradoOcupacionalCodigo', 4);
            $table->string('gradoOcupacional', 45);
            $table->integer('gradosocupacionalesOculto');
            $table->integer('gradosocupacionalesAccion');
            $table->date('gradosocupacionalesfecha');
            $table->string('gradosocupacionalesuser', 45);
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
        Schema::dropIfExists('grado_ocupacionals');
    }
}
