<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnasNuevoVideoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('recetas', function (Blueprint $table) {
            $table->string('rec_titulo_video')->nullable()->after('rec_contenido');
            $table->string('rec_titulo_video_dos')->nullable()->after('rec_video');
            $table->string('rec_video_dos')->nullable()->after('rec_titulo_video_dos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('recetas', function (Blueprint $table) {
            $table->dropColumn('rec_titulo_video');
            $table->dropColumn('rec_titulo_video_dos');
            $table->dropColumn('rec_video_dos');
        });
    }
}
