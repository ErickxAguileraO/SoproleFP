<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductoRecetaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto_receta', function (Blueprint $table) {
            $table->id('prorec_id');

            $table->unsignedBigInteger('prorec_producto_id');
            $table->foreign('prorec_producto_id')->references('pro_id')->on('productos')->onDelete('cascade');

            $table->unsignedBigInteger('prorec_receta_id');
            $table->foreign('prorec_receta_id')->references('rec_id')->on('recetas')->onDelete('cascade');

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
        Schema::dropIfExists('producto_receta');
    }
}
