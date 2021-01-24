<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlanNutricionalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plan_nutricionals', function (Blueprint $table) {
            $table->id();

            $table->integer('user_id')->nullable()->unsigned();

            $table->string('pesoActual')->nullable();
            $table->string('porcentajeGrasa')->nullable();
            $table->string('kgGrasa')->nullable();
            $table->string('kgMasaMuscular')->nullable();
            $table->string('desIntercambio')->nullable();
            $table->string('desEjemplo')->nullable();
            $table->string('mmIntercambio')->nullable();
            $table->string('mmEjemplo')->nullable();
            $table->string('almIntercambio')->nullable();
            $table->string('almEjemplo')->nullable();
            $table->string('mtIntercambio')->nullable();
            $table->string('mtEjemplo')->nullable();
            $table->string('postEjercicioIntercambio')->nullable();
            $table->string('postEjercicioEjemplo')->nullable();
            $table->string('cenaIntercambio')->nullable();
            $table->string('cenaEjemplo')->nullable();
            $table->string('recomendacion')->nullable();
            

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
        Schema::dropIfExists('plan_nutricional');
    }
}
