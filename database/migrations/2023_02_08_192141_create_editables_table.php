<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEditablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('editables', function (Blueprint $table) {
            $table->id('edi_id');
            $table->string('edi_titulo')->nullable();
            $table->text('edi_contenido')->nullable();
            $table->string('edi_video')->nullable();
            $table->integer('edi_tipo')->nullable();
            $table->integer('edi_estado')->nullable();
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
        Schema::dropIfExists('editables');
    }
}
