<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Contacto extends Model
{
    use HasFactory;

    protected $table = 'contactos';

    protected $primaryKey = 'con_id';

    protected $fillable = [
        'con_nombre',
        'con_telefono',
        'con_email',
        'con_empresa',
        'con_calle',
        'con_ciudad',
    ];
}
