<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeteCondicionLaboralsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sete_condicion_laborals', function (Blueprint $table) {
            $table->increments('setecclid');
            $table->string('setecclEmpresa', 100);
            $table->string('setecclCedula', 10);
            $table->date('setecclFecharegistro');
            $table->string('setecclacenso', 45);
            $table->string('setecclsatisfaccion', 45);
            $table->string('setecclAgotamiento', 45);
            $table->string('setecclRespeto', 45);
            $table->string('setecclReconocimiento', 45);
            $table->string('setecclRiesgo', 45);
            $table->string('setecclCambio', 45);
            $table->string('setecclBonificacion', 45);
            $table->string('setecclTransporte', 45);
            $table->string('setecclCapacitacion', 45);
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
        Schema::dropIfExists('sete_condicion_laborals');
    }
}
