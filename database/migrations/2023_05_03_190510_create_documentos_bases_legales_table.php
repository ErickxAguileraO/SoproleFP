<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocumentosBasesLegalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documentos_bases_legales', function (Blueprint $table) {
            $table->id('dbs_id');
            $table->string('dbs_nombre')->nullable();
            $table->string('dbs_archivo')->nullable();
            $table->integer('dbs_orden')->nullable();
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
        Schema::dropIfExists('documentos_bases_legales');
    }
}
