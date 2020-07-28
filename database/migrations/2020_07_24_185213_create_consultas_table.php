<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsultasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consultas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->nullable();
            $table->string('apellido')->nullable();
            $table->string('genero')->nullable();
            $table->integer('edad')->nullable();
            $table->string('correo')->nullable();
            $table->integer('telefono')->nullable();
            $table->string('estadoCivil')->nullable();
            $table->string('trabajo')->nullable();
            $table->string('religion')->nullable();
            $table->string('motivoConsulta')->nullable();
            $table->string('pesoActual')->nullable();
            $table->string('pesoUsual')->nullable();
            $table->string('talla')->nullable();
            $table->string('cMuneca')->nullable();
            $table->string('cAbdomen')->nullable();
            $table->string('composCorporal')->nullable();
            $table->string('IMC')->nullable();
            $table->string('PI')->nullable();
            $table->string('pesoMeta')->nullable();
            $table->string('pesoUsar')->nullable();
            $table->string('LDL')->nullable();
            $table->string('hemoglobina')->nullable();
            $table->string('HDL')->nullable();
            $table->string('triglicerios')->nullable();
            $table->string('hematocrito')->nullable();
            $table->mediumText('otros')->nullable();
            $table->string('APPOperaciones')->nullable();
            $table->string('APF')->nullable();
            $table->string('medicamentos')->nullable();
            $table->string('alergias')->nullable();
            $table->string('actividaFisica')->nullable();
            $table->string('tipo')->nullable();
            $table->string('frecuencia')->nullable();
            $table->string('suplementos')->nullable();
            $table->string('desayunoHora')->nullable();
            $table->string('desayunoAlimento')->nullable();
            $table->string('mmHora')->nullable();
            $table->string('mmAlimento')->nullable();
            $table->string('almuerzoHora')->nullable();
            $table->string('almuerzoAlimento')->nullable();
            $table->string('mtHora')->nullable();
            $table->string('mtAlimento')->nullable();
            $table->string('cenaHora')->nullable();
            $table->string('cenaAlmuerzo')->nullable();
            $table->string('cnHora')->nullable();
            $table->string('cnAlimento')->nullable();
            $table->string('total')->nullable();
            $table->string('observaciones')->nullable();
            $table->string('pregunta1')->nullable();
            $table->string('pregunta2')->nullable();
            $table->string('pregunta3')->nullable();
            $table->string('pregunta4')->nullable();
            $table->string('pregunta5')->nullable();
            $table->string('pregunta6')->nullable();
            $table->string('pregunta7')->nullable();
            $table->string('pregunta8')->nullable();
            $table->string('diagnostico')->nullable();
            $table->string('usuarios_id')->nullable();
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
        Schema::dropIfExists('consultas');
    }
}
