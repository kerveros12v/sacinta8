<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePuebloNacionalidadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pueblo_nacionalidads', function (Blueprint $table) {
            $table->increments('pnid');
            $table->integer('pncodigo');
            $table->string('pueblonacionalidad', 45);
            $table->integer('pnetnia');
            $table->integer('pnoculto');
            $table->integer('pnaccion');
            $table->date('pnfecha');
            $table->string('pnuser', 45);
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
        Schema::dropIfExists('pueblo_nacionalidads');
    }
}
