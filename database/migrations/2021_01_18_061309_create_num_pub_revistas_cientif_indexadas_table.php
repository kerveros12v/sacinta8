<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNumPubRevistasCientifIndexadasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('num_pub_revistas_cientif_indexadas', function (Blueprint $table) {
            $table->increments('nprciid');
            $table->string('nprci', 50);
            $table->integer('nprciOculto');
            $table->integer('nprciAccion');
            $table->date('nprcifecha');
            $table->string('nprciuser', 45);
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
        Schema::dropIfExists('num_pub_revistas_cientif_indexadas');
    }
}
