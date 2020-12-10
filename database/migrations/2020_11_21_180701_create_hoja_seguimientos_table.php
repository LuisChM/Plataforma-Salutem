<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHojaSeguimientosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hoja_seguimientos', function (Blueprint $table) {
            $table->id();

            $table->integer('user_id')->nullable();


            $table->string('logrosPlan')->nullable();
            $table->string('deficientes')->nullable();
            $table->string('pesoInicial')->nullable();
            $table->string('imcInicial')->nullable();
            $table->string('grasaInicial')->nullable();
            $table->string('circAbdominalInicial')->nullable();
            $table->string('requerimientoInicial')->nullable();
            $table->string('distChoInicial')->nullable();
            $table->string('distChonInicial')->nullable();
            $table->string('distGrasasInicial')->nullable();
            $table->mediumText('cambioPlan')->nullable();
            $table->mediumText('metasObjetivos')->nullable();
            
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
        Schema::dropIfExists('hoja_seguimientos');
    }
}
