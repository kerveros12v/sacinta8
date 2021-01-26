<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstadoCivilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estado_civiles', function (Blueprint $table) {
            $table->increments('estadoCivilId');
            $table->string('estadoscivilcodigo',2);
            $table->string('estadoCivil', 45);
            $table->integer('estadoCivilOculto');
            $table->integer('estadoCivilAccion');
            $table->date('estadoCivilfecha');
            $table->string('estadoCiviluser', 45);
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
        Schema::dropIfExists('estado_civiles');
    }
}
