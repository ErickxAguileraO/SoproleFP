<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Segmento extends Model
{
    use HasFactory;

    protected $table = 'segmentos';

    protected $primaryKey = 'seg_id';

    protected $fillable = [
        'seg_nombre',
        'seg_url',
        'seg_color',
        'seg_color_texto',
        'seg_color_anterior',
        'seg_imagen',
        'seg_orden',
        'seg_estado',
    ];
}
