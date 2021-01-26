<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePubRevistaCieninIndexadasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pub_revista_cienin_indexadas', function (Blueprint $table) {
            $table->increments('pubRevistasCienInIndexadasId');
            $table->string('prciCodigo', 45);
            $table->string('pubRevistasCienInIndexadas', 50);
            $table->integer('prciOculto');
            $table->integer(' prciAccion');
            $table->date('prcifecha');
            $table->string('prciuser', 45);
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
        Schema::dropIfExists('pub_revista_cienin_indexadas');
    }
}
