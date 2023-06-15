<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Metadatos extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'metadatos';

    protected $primaryKey = 'met_id';

    protected $fillable = [
        'met_titulo',
        'met_descripcion',
        'met_key',
        'met_codigo_analytics',
    ];
}
