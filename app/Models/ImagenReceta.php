<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ImagenReceta extends Model
{
    use HasFactory;

    protected $table = 'imagen_receta';

    protected $primaryKey = 'ire_id';

    protected $fillable = [
        'ire_imagen',
        'ire_receta_id',
    ];
}
