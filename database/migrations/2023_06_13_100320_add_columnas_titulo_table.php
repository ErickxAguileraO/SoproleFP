<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnasTituloTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('titulos', function (Blueprint $table) {
            $table->string('tit_titulo_dos_home')->nullable();
            $table->text('tit_descripcion_dos_home')->nullable();
            $table->string('tit_titulo_tres_home')->nullable();
            $table->text('tit_descripcion_tres_home')->nullable();
            $table->string('tit_titulo_cuatro_home')->nullable();
            $table->text('tit_descripcion_cuatro_home')->nullable();
            $table->string('tit_titulo_cinco_home')->nullable();
            $table->text('tit_descripcion_cinco_home')->nullable();
            $table->string('tit_titulo_seis_home')->nullable();
            $table->text('tit_descripcion_seis_home')->nullable();
            $table->string('tit_titulo_uno_mini_sitio')->nullable();
            $table->text('tit_descripcion_uno_mini_sitio')->nullable();
            $table->string('tit_titulo_dos_mini_sitio')->nullable();
            $table->text('tit_descripcion_dos_mini_sitio')->nullable();
            $table->string('tit_titulo_tres_mini_sitio')->nullable();
            $table->text('tit_descripcion_tres_mini_sitio')->nullable();
            $table->string('tit_titulo_cuatro_mini_sitio')->nullable();
            $table->text('tit_descripcion_cuatro_mini_sitio')->nullable();
            $table->string('tit_titulo_cinco_mini_sitio')->nullable();
            $table->text('tit_descripcion_cinco_mini_sitio')->nullable();
            $table->string('tit_titulo_seis_mini_sitio')->nullable();
            $table->text('tit_descripcion_seis_mini_sitio')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('titulos', function (Blueprint $table) {
            $table->dropColumn('tit_titulo_dos_home');
            $table->dropColumn('tit_descripcion_dos_home');
            $table->dropColumn('tit_titulo_tres_home');
            $table->dropColumn('tit_descripcion_tres_home');
            $table->dropColumn('tit_titulo_cuatro_home');
            $table->dropColumn('tit_descripcion_cuatro_home');
            $table->dropColumn('tit_titulo_cinco_home');
            $table->dropColumn('tit_descripcion_cinco_home');
            $table->dropColumn('tit_titulo_seis_home');
            $table->dropColumn('tit_descripcion_seis_home');
            $table->dropColumn('tit_titulo_uno_mini_sitio');
            $table->dropColumn('tit_descripcion_uno_mini_sitio');
            $table->dropColumn('tit_titulo_dos_mini_sitio');
            $table->dropColumn('tit_descripcion_dos_mini_sitio');
            $table->dropColumn('tit_titulo_tres_mini_sitio');
            $table->dropColumn('tit_descripcion_tres_mini_sitio');
            $table->dropColumn('tit_titulo_cuatro_mini_sitio');
            $table->dropColumn('tit_descripcion_cuatro_mini_sitio');
            $table->dropColumn('tit_titulo_cinco_mini_sitio');
            $table->dropColumn('tit_descripcion_cinco_mini_sitio');
            $table->dropColumn('tit_titulo_seis_mini_sitio');
            $table->dropColumn('tit_descripcion_seis_mini_sitio');
        });
    }
}
