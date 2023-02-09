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
            $table->string('ali_nombre');
            $table->string('ali_imagen');

            $table->unsignedBigInteger('ali_editable_id');
            $table->foreign('ali_editable_id')->references('edi_id')->on('editables')->onDelete('cascade');
            
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
