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
            $table->string('pro_titulo')->nullable();
            $table->string('pro_sku')->nullable();
            $table->string('pro_formato')->nullable();
            $table->integer('pro_estrellas')->nullable();
            $table->text('pro_contenido')->nullable();
            $table->text('pro_conservacion')->nullable();
            $table->string('pro_vida_util')->nullable();
            $table->string('pro_unidades_venta')->nullable();

            $table->unsignedBigInteger('pro_categoria_id');
            $table->foreign('pro_categoria_id')->references('cat_id')->on('categorias')->onDelete('cascade');

            $table->integer('pro_orden')->nullable();
            $table->integer('pro_estado')->nullable();
            $table->string('pro_url')->nullable();

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
