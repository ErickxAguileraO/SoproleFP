<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Academia extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'academia';

    protected $primaryKey = 'aca_id';

    protected $fillable = [
        'aca_titulo',
        'aca_url',
        'aca_fecha',
        'aca_imagen',
        'aca_titulo2',
        'aca_contenido',
        'aca_video',
        'aca_orden',
        'aca_estado',

    ];
}
