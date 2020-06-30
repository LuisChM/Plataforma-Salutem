<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAudituserproductoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('audituserproducto', function (Blueprint $table) {
            $table->id();
            $table->integer('producto_id');
            $table->integer('rol_id');
            $table->string('name');
            $table->dateTime('fecha_hora')->default(\Carbon\Carbon::now());
            $table->integer('cantidad_usada');
            $table->integer('unidad_de_medida');
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
        Schema::dropIfExists('audituserproducto');
    }
}
