<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {

            $table->id();
            $table->string('nombre');
            $table->integer('categoria');
            // $table->foreign('categoria)->constrained('categoria');

            // $table->unsignedBigInteger('categoria');
            // $table->foreign('categoria')->references('id')->on('categorias');

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
        Schema::dropIfExists('productos');
    }
}
// Este alter table se hace en phpmyadmin en la pestana sql para hacer la relacion completa en la bd
// alter table productos add(
//     FOREIGN key (categoria)REFERENCES categorias(id)
//     )