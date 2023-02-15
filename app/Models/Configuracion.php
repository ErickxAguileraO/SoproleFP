<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Configuracion extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'configuracion';

    protected $primaryKey = 'con_id';

    protected $fillable = [
        'con_contenido',
        'con_link',
        'con_tipo',
        'con_imagen',
    ];
}
