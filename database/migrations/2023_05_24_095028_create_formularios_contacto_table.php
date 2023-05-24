<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\FormularioContacto;

class CreateFormulariosContactoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formularios_contacto', function (Blueprint $table) {
            $table->id('forcon_id');
            $table->text('forcon_titulo')->nullable();
            $table->text('forcon_contenido')->nullable();
            $table->text('forcon_formulario_contacto')->nullable();
            $table->text('forcon_formulario_aceptar')->nullable();
            $table->text('forcon_formulario_rechazar')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });

        $this->insert();
    }
    private function insert(){
        
        FormularioContacto::create([
            "forcon_titulo" => 'Te comentamos que para ser nuestro cliente poseemos las siguientes condiciones:',
            "forcon_contenido" => '<p>• El rut indicado debe presentar iniciación de actividades en el Servicio de Impuestos Internos</p><p>• El monto mínimo de cada compra es de $47.600 IVA incluido ($40.000 netos)</p>• El monto mínimo de cada compra es de $47.600 IVA incluido ($40.000 netos)<br/><p>En caso de aceptar y cumplir las condiciones indicadas, el siguiente paso es validar la cobertura logística en el sector de despacho. Para ello es necesario que complete el siguiente formulario.</p>',
            "forcon_formulario_contacto" => '',
            "forcon_formulario_aceptar" => '',
            "forcon_formulario_rechazar" => '',
        ]);
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('formularios_contacto');
    }
}
