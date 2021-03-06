<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContabilidadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contabilidads', function (Blueprint $table) {
            $table->id();

            $table->integer('ingresos')->nullable();
            $table->integer('gastos')->nullable();
            $table->integer('total')->nullable();
            $table->longText('descripcion')->nullable();
            $table->date('fecha');

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
        Schema::dropIfExists('contabilidads');
    }
}
