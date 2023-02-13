<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RecetaSegmento extends Model
{
    use HasFactory;

    protected $table = 'receta_segmento';

    protected $primaryKey = 'recseg_id';

    protected $fillable = [
        'recseg_receta_id',
        'recseg_segmento_id',
    ];
}
