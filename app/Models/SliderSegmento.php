<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SliderSegmento extends Model
{
    use HasFactory;

    protected $table = 'slider_segmento';

    protected $primaryKey = 'sliseg_id';

    protected $fillable = [
        'sliseg_slider_id',
        'sliseg_segmento_id',
    ];
}
