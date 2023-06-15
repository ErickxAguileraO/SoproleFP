<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Metadatos;

class InsertDatoIntoMetadatos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Metadatos::insert([
            [
                'met_titulo' => 'SoproleFP',
                'met_descripcion' => 'SoproleFP',
                'met_key' => 'SoproleFP',
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Metadatos::query()->delete();
    }
}
