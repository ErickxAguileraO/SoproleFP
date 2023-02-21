<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Producto extends Model
{
    use HasFactory;

    protected $table = 'productos';

    protected $primaryKey = 'pro_id';

    protected $fillable = [
        'pro_titulo',
        'pro_sku',
        'pro_formato',
        'pro_imagen',
        'pro_estrellas',
        'pro_contenido',
        'pro_conservacion',
        'pro_vida_util',
        'pro_unidades_venta',
        'pro_categoria_id',
        'pro_orden',
        'pro_estado',
        'pro_url',
        'pro_archivo'
    ];

    public function imagenes()
    {
        return $this->hasMany(ImagenProducto::class,'ipr_producto_id', 'pro_id');
    }

    public function imagenListado()
    {
        return $this->hasOne(ImagenProducto::class,'ipr_producto_id', 'pro_id')->latest();
    }

    public function RecetasWeb()
    {
        return $this->belongsToMany(Receta::class, 'producto_receta', 'prorec_producto_id', 'prorec_receta_id')
            ->where('rec_estado', 1)
            ->orderBy('rec_orden', 'ASC')
            ->distinct();
    }
}
