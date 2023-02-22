<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormularioHazteClienteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formulario_hazte_cliente', function (Blueprint $table) {
            $table->id('fhc_id');
            $table->string('fhc_razon_social')->nullable();
            $table->string('fhc_rut')->nullable();
            $table->integer('fhc_tipo')->nullable();
            $table->string('fhc_cual')->nullable();

            $table->string('fhc_direccion')->nullable();
            $table->string('fhc_numero')->nullable();

            $table->unsignedBigInteger('fhc_comuna_id')->nullable();
            $table->foreign('fhc_comuna_id')->references('com_id')->on('comuna')->onDelete('cascade');

            $table->string('fhc_nombre')->nullable();
            $table->string('fhc_telefono')->nullable();
            $table->string('fhc_correo')->nullable();
        
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
        Schema::dropIfExists('formulario_hazte_cliente');
    }
}
