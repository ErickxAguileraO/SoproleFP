<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNoticiaSegmentoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('noticia_segmento', function (Blueprint $table) {
            $table->id('notseg_id');

            $table->unsignedBigInteger('notseg_noticia_id');
            $table->foreign('notseg_noticia_id')->references('not_id')->on('noticias')->onDelete('cascade');

            $table->unsignedBigInteger('notseg_segmento_id');
            $table->foreign('notseg_segmento_id')->references('seg_id')->on('segmentos')->onDelete('cascade');

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
        Schema::dropIfExists('noticia_segmento');
    }
}
