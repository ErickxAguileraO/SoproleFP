<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class HazteCliente extends Model
{
    use HasFactory;

    protected $table = 'formulario_hazte_cliente';

    protected $primaryKey = 'fhc_id';

    protected $fillable = [
        'fhc_razon_social',
        'fhc_rut',
        'fhc_tipo',
        'fhc_cual',
        'fhc_direccion',
        'fhc_numero',
        'fhc_comuna_id',
        'fhc_nombre',
        'fhc_telefono',
        'fhc_correo',
    ];
}
