<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenuDinamicoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menu_dinamico', function (Blueprint $table) {
            $table->id('mdi_id');
            $table->string('mdi_nombre')->nullable();
            $table->integer('mdi_orden')->nullable();
            $table->integer('mdi_estado')->nullable();
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
        Schema::dropIfExists('menu_dinamico');
    }
}
