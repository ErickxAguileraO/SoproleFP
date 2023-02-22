<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToRecetasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('recetas', function (Blueprint $table) {
            $table->integer('rec_dificultad')->nullable()->after('rec_orden');
            $table->text('rec_porciones')->nullable()->after('rec_dificultad');
            $table->text('rec_ingredientes')->nullable()->after('rec_porciones');
            $table->text('rec_preparacion')->nullable()->after('rec_ingredientes');
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
            $table->dropColumn('rec_dificultad');
            $table->dropColumn('rec_porciones');
            $table->dropColumn('rec_ingredientes');
            $table->dropColumn('rec_preparacion');
        });
    }
}
