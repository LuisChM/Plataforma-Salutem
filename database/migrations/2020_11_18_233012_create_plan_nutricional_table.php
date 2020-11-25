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

            $table->integer('user_id')->nullable();
            // Lunes
            $table->string('desLunes')->nullable();
            $table->string('mMatLunes')->nullable();
            $table->string('almLunes')->nullable();
            $table->string('mMerLunes')->nullable();
            $table->string('cenLunes')->nullable();
            // Martes
            $table->string('desMartes')->nullable();
            $table->string('mMatMartes')->nullable();
            $table->string('almMartes')->nullable();
            $table->string('mMerMartes')->nullable();
            $table->string('cenMartes')->nullable();
            // Miercoles
            $table->string('desMiercoles')->nullable();
            $table->string('mMatMiercoles')->nullable();
            $table->string('almMiercoles')->nullable();
            $table->string('mMerMiercoles')->nullable();
            $table->string('cenMiercoles')->nullable();
            // Jueves
            $table->string('desJueves')->nullable();
            $table->string('mMatJueves')->nullable();
            $table->string('almJueves')->nullable();
            $table->string('mMerJueves')->nullable();
            $table->string('cenJueves')->nullable();
            // Viernes
            $table->string('desViernes')->nullable();
            $table->string('mMatViernes')->nullable();
            $table->string('almViernes')->nullable();
            $table->string('mMerViernes')->nullable();
            $table->string('cenViernes')->nullable();
            // Sabado
            $table->string('desSabado')->nullable();
            $table->string('mMatSabado')->nullable();
            $table->string('almSabado')->nullable();
            $table->string('mMerSabado')->nullable();
            $table->string('cenSabado')->nullable();
            // Domingo
            $table->string('desDomingo')->nullable();
            $table->string('mMatDomingo')->nullable();
            $table->string('almDomingo')->nullable();
            $table->string('mMerDomingo')->nullable();
            $table->string('cenDomingo')->nullable();

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
