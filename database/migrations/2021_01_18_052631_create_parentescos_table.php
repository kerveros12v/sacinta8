<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParentescosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('parentescos', function (Blueprint $table) {
            $table->increments('idParentescos');
            $table->string('parentescocodigo',10);
            $table->string('parentesco',45);
            $table->integer('parentescosOculto');
            $table->integer('parentescosAccion');
            $table->date('parentescosfecha');
            $table->string('parentescosuser',45);
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
        Schema::dropIfExists('parentescos');
    }
}
