<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriaMigratoriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categoria_migratorias', function (Blueprint $table) {
            $table->increments('categoriaMigratoriaId');
            $table->string('categoriasmigratoriacodigo',4);
            $table->string('categoriaMigratoria', 45);
            $table->integer('categoriasmigratoriaOculto');
            $table->integer('categoriasmigratoriaAccion');
            $table->date('categoriasmigratoriafecha');
            $table->string('categoriasmigratoriauser', 45);
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
        Schema::dropIfExists('categoria_migratorias');
    }
}
