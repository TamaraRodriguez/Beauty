<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComprasTienenProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compras_tienen_productos', function (Blueprint $table) {
            $table->unsignedSmallInteger('compra_id');
            $table->foreign('compra_id')->references('compra_id')->on('compras');
            $table->unsignedSmallInteger('producto_id');
            $table->foreign('producto_id')->references('producto_id')->on('productos');
            $table->timestamps();
            $table->primary(['compra_id', 'producto_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('compras_tienen_productos');
    }
}
