<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Receta extends Model
{
    use HasFactory;

    protected $table = 'recetas';

    protected $primaryKey = 'rec_id';

    protected $fillable = [
        'rec_titulo',
        'rec_contenido',
        'rec_video',
        'rec_orden',
        'rec_estado',
    ];

    public function imagenes()
    {
        return $this->hasMany(ImagenReceta::class, 'ire_receta_id', 'rec_id');
    }
}
