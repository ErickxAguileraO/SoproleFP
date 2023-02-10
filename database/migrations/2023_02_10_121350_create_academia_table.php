<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcademiaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('academia', function (Blueprint $table) {
            $table->id('aca_id');
            $table->text('aca_titulo')->nullable();
            $table->text('aca_titulo2')->nullable();
            $table->text('aca_contenido')->nullable();
            $table->string('aca_video')->nullable();
            $table->integer('aca_orden')->nullable();
            $table->integer('aca_estado')->nullable();
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
        Schema::dropIfExists('academia');
    }
}
