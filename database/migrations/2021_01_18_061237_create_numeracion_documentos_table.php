<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNumeracionDocumentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('numeracion_documentos', function (Blueprint $table) {
            $table->increments('numeracionDocumentosId');
            $table->string('nombreDocumento', 45);
            $table->integer('numeracionSiguiente');
            $table->integer('numeraciondocumentosOculto');
            $table->integer('numeraciondocumentosAccion');
            $table->date('numeraciondocumentosfecha');
            $table->string('numeraciondocumentosuser', 45);
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
        Schema::dropIfExists('numeracion_documentos');
    }
}
