<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->id();

            $table->integer('user_id')->nullable();
            $table->string('nombre')->nullable();
            $table->string('apellido')->nullable();
            $table->char('genero', 1)->nullable();
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
            $table->string('colesterol')->nullable();
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
            $table->time('desayunoHora')->nullable();
            $table->mediumText('desayunoAlimento')->nullable();
            $table->time('mmHora')->nullable();
            $table->mediumText('mmAlimento')->nullable();
            $table->time('almuerzoHora')->nullable();
            $table->mediumText('almuerzoAlimento')->nullable();
            $table->time('mtHora')->nullable();
            $table->mediumText('mtAlimento')->nullable();
            $table->time('cenaHora')->nullable();
            $table->mediumText('cenaAlimento')->nullable();
            $table->time('cnHora')->nullable();
            $table->mediumText('cnAlimento')->nullable();
            $table->string('total')->nullable();
            $table->mediumText('observaciones')->nullable();
            $table->string('pregunta1')->nullable();
            $table->string('pregunta2')->nullable();
            $table->string('pregunta3')->nullable();
            $table->string('pregunta4')->nullable();
            $table->string('pregunta5')->nullable();
            $table->string('pregunta6')->nullable();
            $table->string('pregunta7')->nullable();
            $table->string('pregunta8')->nullable();
            $table->mediumText('diagnostico')->nullable();
            $table->string('logrosPlan')->nullable();
            $table->string('deficientes')->nullable();
            $table->string('pesoInicial')->nullable();
            $table->string('pesoSeguimiento')->nullable();
            $table->string('imcInicial')->nullable();
            $table->string('imcSeguimiento')->nullable();
            $table->string('grasaInicial')->nullable();
            $table->string('grasaSeguimiento')->nullable();
            $table->string('circAbdominalInicial')->nullable();
            $table->string('circAbdominalSeguimiento')->nullable();
            $table->string('requerimientoInicial')->nullable();
            $table->string('requerimientoSeguimiento')->nullable();
            $table->string('distChoInicial')->nullable();
            $table->string('distChoSeguimiento')->nullable();
            $table->string('distChonInicial')->nullable();
            $table->string('distChonSeguimiento')->nullable();
            $table->string('distGrasasInicial')->nullable();
            $table->string('distGrasasSeguimiento')->nullable();
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
        Schema::dropIfExists('pacientes');
    }
}
