<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSliderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slider', function (Blueprint $table) {
            $table->id('sli_id');
            $table->string('sli_nombre')->nullable();
            $table->string('sli_imagen')->nullable();
            $table->string('sli_imagen_movil')->nullable();
            $table->boolean('sli_estado')->nullable();
            $table->integer('sli_orden')->nullable();
            $table->string('sli_link')->nullable();
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
        Schema::dropIfExists('slider');
    }
}
