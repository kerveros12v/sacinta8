<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocenciaTecnicoSuperiorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('docencia_tecnico_superiors', function (Blueprint $table) {
            $table->increments('docenciaTecnicoSuperiorId');
            $table->string('docenciatecnicosuperiorcodigo',4);
            $table->string('docenciaTecnicoSuperior',4);
            $table->integer('docenciatecnicosuperiorOculto');
            $table->integer('docenciatecnicosuperiorAccion');
            $table->date('docenciatecnicosuperiorfecha');
            $table->string('docenciatecnicosuperioruser',45);
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
        Schema::dropIfExists('docencia_tecnico_superiors');
    }
}
