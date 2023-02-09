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
            $table->id('pro_id');
            $table->string('pro_titulo');
            $table->string('pro_sku');
            $table->string('pro_formato');
            $table->integer('pro_estrellas');
            $table->text('pro_contenido');
            $table->text('pro_conservacion');
            $table->string('pro_vida_util');
            $table->string('pro_unidades_venta');

            $table->unsignedBigInteger('pro_categoria_id');
            $table->foreign('pro_categoria_id')->references('cat_id')->on('categorias')->onDelete('cascade');

            $table->softDeletes();
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
        Schema::dropIfExists('productos');
    }
}
