<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateObraPublicacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('obra_publicacions', function (Blueprint $table) {
            $table->increments('obrasPublicacionescId');
            $table->integer('fkpubRevistasCienInIndexadasId');
            $table->integer('fknumPubRevistasCientifIndexadasId');
            $table->integer('docentesNumeroIdentificacion');
            $table->integer('obraspublicacionesOculto');
            $table->integer('obraspublicacionesAccion');
            $table->date('obraspublicacionesfecha');
            $table->string('obraspublicacionesuser', 45);
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
        Schema::dropIfExists('obra_publicacions');
    }
}
