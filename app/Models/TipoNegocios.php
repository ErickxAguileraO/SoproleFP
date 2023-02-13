<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TipoNegocios extends Model
{
    use HasFactory;

    protected $table = 'tipo_negocio';

    protected $primaryKey = 'tne_id';

    protected $fillable = [
        'tne_nombre',
        'tne_estado'
    ];
}
