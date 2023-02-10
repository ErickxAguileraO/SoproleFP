<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRecetaSegmentoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('receta_segmento', function (Blueprint $table) {
            $table->id('recseg_id');

            $table->unsignedBigInteger('recseg_receta_id');
            $table->foreign('recseg_receta_id')->references('rec_id')->on('recetas')->onDelete('cascade');

            $table->unsignedBigInteger('recseg_segmento_id');
            $table->foreign('recseg_segmento_id')->references('seg_id')->on('segmentos')->onDelete('cascade');

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
        Schema::dropIfExists('receta_segmento');
    }
}
