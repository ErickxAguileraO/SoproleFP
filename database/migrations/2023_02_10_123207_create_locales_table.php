<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locales', function (Blueprint $table) {
            $table->id('loc_id');
            $table->string('loc_nombre')->nullable();

            $table->unsignedBigInteger('loc_comuna_id')->nullable();
            $table->foreign('loc_comuna_id')->references('com_id')->on('comuna')->onDelete('cascade');

            $table->integer('loc_orden')->nullable();
            $table->integer('loc_estado')->nullable();

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
        Schema::dropIfExists('locales');
    }
}
