<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNoticiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('noticias', function (Blueprint $table) {
            $table->id('not_id');
            $table->date('not_fecha')->nullable();
            $table->string('not_url')->nullable();
            $table->string('not_titulo')->nullable();
            $table->string('not_titulo2')->nullable();
            $table->text('not_contenido')->nullable();
            $table->integer('not_estado')->nullable();

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
        Schema::dropIfExists('noticias');
    }
}
