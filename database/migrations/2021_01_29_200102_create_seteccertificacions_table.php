<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeteccertificacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seteccertificacions', function (Blueprint $table) {
            $table->increments('idsetecCertificacion');
            $table->integer('fkidsetecperfil');
            $table->date('fechaprueba');
            $table->string('horaprueba', 5);
            $table->integer('costoCertidicacion');
            $table->string('setecLugardondeExaminado', 60);
            $table->string('setecnombreEmpresaLugar', 100);
            $table->string('setecdireccionEmpresa', 100);
            $table->string('setecTelefonoEmpresa', 100);
            $table->integer('seteccertificacionOculto');
            $table->integer('seteccertificacionAccion');
            $table->date('seteccertificacionfecha');
            $table->string('seteccertificacionuser', 45);
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
        Schema::dropIfExists('seteccertificacions');
    }
}
