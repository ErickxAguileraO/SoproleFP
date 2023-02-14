<?php

use App\Models\Region;
use GuzzleHttp\Promise\Create;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('region', function (Blueprint $table) {
            $table->id('reg_id');
            $table->string('reg_nombre');
            $table->timestamps();
        });

        $this->insertRegiones();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('region');
    }

    private function insertRegiones()
    {
        $regions = [
            [1, 'Arica y Parinacota', 'XV'],
            [2, 'Tarapacá', 'I'],
            [3, 'Antofagasta', 'II'],
            [4, 'Atacama', 'III'],
            [5, 'Coquimbo', 'IV'],
            [6, 'Valparaiso', 'V'],
            [7, 'Metropolitana de Santiago', 'RM'],
            [8, 'Libertador General Bernardo O\'Higgins', 'VI'],
            [9, 'Maule', 'VII'],
            [10, 'Biobío', 'VIII'],
            [11, 'La Araucanía', 'IX'],
            [12, 'Los Ríos', 'XIV'],
            [13, 'Los Lagos', 'X'],
            [14, 'Aisén del General Carlos Ibáñez del Campo', 'XI'],
            [15, 'Magallanes y de la Antártica Chilena', 'XII']
        ];
        foreach ($regions as $region) {
            Region::create([
                "reg_nombre" => $region[1]
            ]);
        }
    }
}
