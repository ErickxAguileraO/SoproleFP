<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cliente extends Model
{
    use HasFactory;

    protected $table = 'clientes';

    protected $primaryKey = 'cli_id';

    protected $fillable = [
        'cli_razon_social',
        'cli_rut',
        'cli_otro_tipo',
        'cli_direccion_calle',
        'cli_direccion_numero',
        'cli_nombre_contacto',
        'cli_telefono_contacto',
        'cli_correo_contacto',
        'cli_estado',
    ];
}
