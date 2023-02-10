<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImagenRecetaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imagen_receta', function (Blueprint $table) {
            $table->id('ire_id');
            $table->string('ire_imagen');

            $table->unsignedBigInteger('ire_receta_id');
            $table->foreign('ire_receta_id')->references('rec_id')->on('recetas')->onDelete('cascade');
            
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
        Schema::dropIfExists('imagen_receta');
    }
}
