<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class NoticiaSegmento extends Model
{
    use HasFactory;

    protected $table = 'noticia_segmento';

    protected $primaryKey = 'notseg_id';

    protected $fillable = [
        'notseg_noticia_id',
        'notseg_segmento_id',
    ];
}
