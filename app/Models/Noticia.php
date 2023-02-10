<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Noticia extends Model
{
    use HasFactory;

    protected $table = 'noticias';

    protected $primaryKey = 'not_id';

    protected $fillable = [
        'not_titulo',
        'not_titulo2',
        'not_contenido',
    ];
}
