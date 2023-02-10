<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcademiaSegmentoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('academia_segmento', function (Blueprint $table) {
            $table->id('acaseg_id');

            $table->unsignedBigInteger('acaseg_academia_id');
            $table->foreign('acaseg_academia_id')->references('aca_id')->on('academia')->onDelete('cascade');

            $table->unsignedBigInteger('acaseg_segmento_id');
            $table->foreign('acaseg_segmento_id')->references('seg_id')->on('segmentos')->onDelete('cascade');

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
        Schema::dropIfExists('academia_segmento');
    }
}
