<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ImagenNoticia extends Model
{
    use HasFactory;

    protected $table = 'imagen_noticia';

    protected $primaryKey = 'ino_id';

    protected $fillable = [
        'ino_imagen',
        'ino_noticia_id',
    ];
}
