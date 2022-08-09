<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTienenProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios_tienen_productos', function (Blueprint $table) {
            $table->foreignId('usuario_id')->constrained('usuarios', 'usuario_id');
            $table->unsignedSmallInteger('producto_id');
            $table->foreign('producto_id')->references('producto_id')->on('productos');
            $table->timestamps();
            $table->primary(['usuario_id', 'producto_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios_tienen_productos');
    }
}
