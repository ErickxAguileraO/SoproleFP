<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClienteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cliente', function (Blueprint $table) {
            $table->id('clie_id');
            $table->unsignedBigInteger('clie_editable_id');
            $table->foreign('clie_editable_id')->references('edi_id')->on('editables')->onDelete('cascade');
            $table->string('clie_nombre')->nullable();
            $table->string('clie_imagen')->nullable();
            $table->integer('clie_estado')->nullable();
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
        Schema::dropIfExists('cliente');
    }
}
