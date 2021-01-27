<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LlavesForaneas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('acceso_departamentos', function (Blueprint $table) {
            $table->integer('departamentos_iddepartamentos')->unsigned();
            $table->foreign('departamentos_iddepartamentos')->references('iddepartamentos')->on('departamentos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        $table->dropForeign('posts_departamentos_iddepartamentos_foreign');
    }
}
