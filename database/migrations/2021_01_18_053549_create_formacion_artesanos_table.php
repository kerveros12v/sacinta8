<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormacionArtesanosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formacion_artesanos', function (Blueprint $table) {
            $table->increments('faid');
            $table->string('facodigo', 10);
            $table->string('formacionArtesanal', 45);
            $table->integer('faoculto');
            $table->integer('faaccion');
            $table->date('fafecha');
            $table->string('fauser', 45);
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
        Schema::dropIfExists('formacion_artesanos');
    }
}
