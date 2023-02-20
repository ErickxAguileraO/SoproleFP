<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSliderSegmentoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slider_segmento', function (Blueprint $table) {
            $table->id('sliseg_id');

            $table->unsignedBigInteger('sliseg_slider_id');
            $table->foreign('sliseg_slider_id')->references('sli_id')->on('slider')->onDelete('cascade');

            $table->unsignedBigInteger('sliseg_segmento_id');
            $table->foreign('sliseg_segmento_id')->references('seg_id')->on('segmentos')->onDelete('cascade');

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
        Schema::dropIfExists('slider_segmento');
    }
}
