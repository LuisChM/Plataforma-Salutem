<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComprasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compras', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('categoria');
            $table->integer('cantidad');
            $table->string('unidad_de_medida');
            $table->integer('cantidad_agregada');
            $table->timestamps();
        });
        /* Esta tabla se llenará mediante un SP desde los datos digitados por el usuario 
        directamente a la tabla.
        Pero el SP debe sumar la cantidad agregada a la cantidad en la tb producto*/
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('compras');
    }
}
