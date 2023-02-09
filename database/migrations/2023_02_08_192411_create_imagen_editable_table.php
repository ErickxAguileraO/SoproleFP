<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImagenEditableTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imagen_editable', function (Blueprint $table) {
            $table->id('ied_id');
            $table->string('ied_imagen');

            $table->unsignedBigInteger('ied_editable_id');
            $table->foreign('ied_editable_id')->references('edi_id')->on('editables')->onDelete('cascade');
            
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
        Schema::dropIfExists('imagen_editable');
    }
}
