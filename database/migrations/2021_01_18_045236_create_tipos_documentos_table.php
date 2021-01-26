<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTiposDocumentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipos_documentos', function (Blueprint $table) {
            $table->increments('tipoDocumentoId');
            $table->integer('tipoDocumentocodigo');
            $table->string('tipoDocumento', 45);
            $table->integer('tipoDocumentoOculto');
            $table->integer('tipoDocumentoAccion');
            $table->date('tipoDocumentofecha');
            $table->string('tipoDocumentouser', 45);
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
        Schema::dropIfExists('tipos_documentos');
    }
}
