<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticulosTienenEtiquetasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articulos_tienen_etiquetas', function (Blueprint $table) {
            $table->foreignId('articulo_id')->constrained('articulos', 'articulo_id');
            $table->unsignedSmallInteger('etiqueta_id');
            $table->foreign('etiqueta_id')->references('etiqueta_id')->on('etiquetas');
            $table->timestamps();
            $table->primary(['articulo_id', 'etiqueta_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('articulos_tienen_etiquetas');
    }
}
