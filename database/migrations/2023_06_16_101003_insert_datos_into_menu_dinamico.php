<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Models\MenuDinamico;

class InsertDatosIntoMenuDinamico extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        MenuDinamico::insert([
            [
                'mdi_nombre' => 'Conócenos',
                'mdi_orden' => '1',
                'mdi_estado' => '1',
            ],
            [
                'mdi_nombre' => 'Academia',
                'mdi_orden' => '2',
                'mdi_estado' => '1',
            ],
            [
                'mdi_nombre' => 'Productos',
                'mdi_orden' => '3',
                'mdi_estado' => '1',
            ],
            [
                'mdi_nombre' => 'Recetas',
                'mdi_orden' => '4',
                'mdi_estado' => '1',
            ],
            [
                'mdi_nombre' => 'Tendencias y noticias',
                'mdi_orden' => '5',
                'mdi_estado' => '1',
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        MenuDinamico::query()->delete();
    }
}
