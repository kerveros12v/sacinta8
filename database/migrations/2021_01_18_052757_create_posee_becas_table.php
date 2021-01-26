<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePoseeBecasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posee_becas', function (Blueprint $table) {
            $table->increments('poseeBecaId');
            $table->string('poseebecacodigo', 4);
            $table->string('poseeBeca', 2);
            $table->integer('poseebecaOculto');
            $table->integer('poseebecaAccion');
            $table->date('poseebecafecha');
            $table->string('poseebecauser', 45);
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
        Schema::dropIfExists('posee_becas');
    }
}
