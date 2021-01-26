<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormaCalificacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forma_calificacions', function (Blueprint $table) {
            $table->increments('idformaCalificacion');
            $table->string('formaCalificacionTema', 100);
            $table->integer('fchorasdocente');
            $table->string('fchorasestudiante', 45);
            $table->integer('fctenimientosoculto');
            $table->integer('fctenimientosaccion');
            $table->date('fctenimientosfecha');
            $table->string('fctenimientosuser', 45);
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
        Schema::dropIfExists('forma_calificacions');
    }
}
