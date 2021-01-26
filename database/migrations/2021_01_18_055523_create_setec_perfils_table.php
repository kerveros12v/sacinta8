<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSetecPerfilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('setec_perfils', function (Blueprint $table) {
            $table->increments('idsetecperfil');
            $table->string('setecperfilnombre',200);
            $table->string('setecperfilcodigo',10);
            $table->integer('setecperfilOculto');
            $table->integer('setecperfilAccion');
            $table->date('setecperfilfecha');
            $table->string('setecperfiluser',45);
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
        Schema::dropIfExists('setec_perfils');
    }
}
