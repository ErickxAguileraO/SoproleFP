<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImagenNoticiaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imagen_noticia', function (Blueprint $table) {
            $table->id('ino_id');
            $table->string('ino_imagen');

            $table->unsignedBigInteger('ino_noticia_id');
            $table->foreign('ino_noticia_id')->references('not_id')->on('noticias')->onDelete('cascade');
            
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
        Schema::dropIfExists('imagen_noticia');
    }
}
