<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePracticaPreprofecionalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('practica_preprofecionales', function (Blueprint $table) {
            $table->increments('practicasPreProfecionalesId');
            $table->integer('nroHorasPracticasPreprofesionalesPorPeriodo');
            $table->integer('entornoInstitucionalPracticasProfesionalesid');
            $table->integer('fksectorEconomicoid');
            $table->integer('practicaspreprofecionalesOculto');
            $table->integer('practicaspreprofecionalesAccion');
            $table->date('practicaspreprofecionalesfecha');
            $table->string('practicaspreprofecionalesuser', 45);
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
        Schema::dropIfExists('practica_preprofecionales');
    }
}
