<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePivoteSubSegmentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pivote_sub_segmentos', function (Blueprint $table) {
            $table->id('psse_id');

            $table->unsignedBigInteger('psse_subsegmento_id');
            $table->foreign('psse_subsegmento_id')->references('sse_id')->on('sub_segmentos')->onDelete('cascade');

            $table->unsignedBigInteger('psse_noticia_id')->nullable();
            $table->foreign('psse_noticia_id')->references('not_id')->on('noticias')->onDelete('cascade');

            $table->unsignedBigInteger('psse_receta_id')->nullable();
            $table->foreign('psse_receta_id')->references('rec_id')->on('recetas')->onDelete('cascade');

            $table->unsignedBigInteger('psse_academia_id')->nullable();
            $table->foreign('psse_academia_id')->references('aca_id')->on('academia')->onDelete('cascade');

            $table->unsignedBigInteger('psse_segmento_id')->nullable();
            $table->foreign('psse_segmento_id')->references('seg_id')->on('segmentos')->onDelete('cascade');

            $table->unsignedBigInteger('psse_producto_id')->nullable();
            $table->foreign('psse_producto_id')->references('pro_id')->on('productos')->onDelete('cascade');

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
        Schema::dropIfExists('pivote_sub_segmentos');
    }
}
