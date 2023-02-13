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
        'pro_estrellas',
        'pro_contenido',
        'pro_conservacion',
        'pro_vida_util',
        'pro_unidades_venta',
        'pro_categoria_id',
        'pro_orden',
        'pro_estado',
        'pro_url'
    ];

    public function imagenes()
    {
        return $this->hasMany(ImagenProducto::class,'ipr_producto_id', 'pro_id');
    }

}
