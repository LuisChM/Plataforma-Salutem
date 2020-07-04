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
            $table->string('name_producto');
            $table->string('name_user');
            $table->integer('cantidad_usada');
            $table->integer('unidad_de_medida');
            $table->timestamps();

            //se usa un triger y un SP para incertar estos datos el name_user tiene que ser de 
            //una variable de session
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
