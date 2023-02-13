<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PivoteSubSegmentos extends Model
{
    use HasFactory;

    protected $table = 'pivote_sub_segmentos';

    protected $primaryKey = 'psse_id';

    protected $fillable = [
        'psse_subsegmento_id',
        'psse_noticia_id',
        'psse_receta_id',
        'psse_academia_id',
        'psse_segmento_id',
        'psse_producto_id',
    ];
}
