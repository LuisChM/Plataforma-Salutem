<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto', function (Blueprint $table) {
            
            $table->id();
            $table->string('nombre');
            
            $table->foreignId('categorias_id')->constrained('categorias');

            $table->integer('cantidad');//cuantos tomates o cuantos kilogramos de carne
            $table->string('unidad_de_medida');//cantidad de unidades o kilogramos
            $table->timestamps();

            /*la tabla productos mantiene el inventario real de la cantidad de productos
            y este campo se actualiza por medio de un trigger y un sp.*/
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('producto');
    }
}

