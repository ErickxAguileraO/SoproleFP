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
        'rec_url',
        'rec_imagen',
        'rec_contenido',
        'rec_video',
        'rec_orden',
        'rec_estado',
    ];

    public function imagenes()
    {
        return $this->hasMany(ImagenReceta::class, 'ire_receta_id', 'rec_id');
    }

    public function Producto() // tiene muchos Producto
    {
        return $this->belongsToMany(Producto::class, 'producto_receta', 'prorec_receta_id', 'prorec_producto_id')->distinct();
    }
    
    public function segmentos()
    {
        return $this->belongsToMany(Segmento::class,'receta_segmento','recseg_receta_id','recseg_segmento_id');
    }
}
