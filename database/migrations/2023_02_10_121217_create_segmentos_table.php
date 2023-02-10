<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSegmentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('segmentos', function (Blueprint $table) {
            $table->id('seg_id');
            $table->string('seg_nombre')->nullable();
            $table->string('seg_color')->nullable();
            $table->string('seg_color_anterior')->nullable();
            $table->string('seg_imagen')->nullable();
            $table->integer('seg_orden')->nullable();
            $table->integer('seg_estado')->nullable();

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
        Schema::dropIfExists('segmentos');
    }
}
