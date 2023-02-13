<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ImagenProducto extends Model
{
    use HasFactory;

    protected $table = 'imagen_producto';

    protected $primaryKey = 'ipr_id';

    protected $fillable = [
        'ipr_imagen',
        'ipr_producto_id',
    ];
}
