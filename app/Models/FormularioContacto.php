<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FormularioContacto extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'formularios_contacto';

    protected $primaryKey = 'forcon_id';

    protected $fillable = [
        'forcon_titulo',
        'forcon_contenido',
        'forcon_formulario_contacto',
        'forcon_formulario_aceptar',
        'forcon_formulario_rechazar',
    ];

}
