<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id('cli_id');
            $table->string('cli_razon_social');
            $table->string('cli_rut');
            $table->string('cli_otro_tipo');
            $table->string('cli_direccion_calle');
            $table->integer('cli_direccion_numero');
            $table->string('cli_nombre_contacto');
            $table->string('cli_telefono_contacto');
            $table->string('cli_correo_contacto');
            $table->string('cli_estado');

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
        Schema::dropIfExists('clientes');
    }
}
