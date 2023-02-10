<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlianzasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alianzas', function (Blueprint $table) {
            $table->id('ali_id');
            $table->string('ali_nombre')->nullable();
            $table->string('ali_imagen')->nullable();

            $table->unsignedBigInteger('ali_editable_id')->nullable();
            $table->foreign('ali_editable_id')->references('edi_id')->on('editables')->onDelete('cascade');
            
            $table->integer('ali_estado')->nullable();
            $table->integer('ali_orden')->nullable();

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
        Schema::dropIfExists('alianzas');
    }
}
