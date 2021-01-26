<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSectorEconomicosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sector_economicos', function (Blueprint $table) {
            $table->increments('seid');
            $table->string('secodigo', 2);
            $table->string('sectorEconomico', 256);
            $table->integer('seoculto');
            $table->integer('seaccion');
            $table->date('sefecha');
            $table->string('seuser', 45);
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
        Schema::dropIfExists('sector_economicos');
    }
}
