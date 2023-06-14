<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Titulo extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'titulos';

    protected $primaryKey = 'id';

    protected $fillable = [
        'titulo',
        'descripcion',
        'tit_titulo_dos_home',
        'tit_descripcion_dos_home',
        'tit_titulo_tres_home',
        'tit_descripcion_tres_home',
        'tit_titulo_cuatro_home',
        'tit_descripcion_cuatro_home',
        'tit_titulo_cinco_home',
        'tit_descripcion_cinco_home',
        'tit_titulo_seis_home',
        'tit_descripcion_seis_home',
        'tit_titulo_uno_mini_sitio',
        'tit_descripcion_uno_mini_sitio',
        'tit_titulo_dos_mini_sitio',
        'tit_descripcion_dos_mini_sitio',
        'tit_titulo_tres_mini_sitio',
        'tit_descripcion_tres_mini_sitio',
        'tit_titulo_cuatro_mini_sitio',
        'tit_descripcion_cuatro_mini_sitio',
        'tit_titulo_cinco_mini_sitio',
        'tit_descripcion_cinco_mini_sitio',
        'tit_titulo_seis_mini_sitio',
        'tit_descripcion_seis_mini_sitio',
    ];
}
