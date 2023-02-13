<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RecetaProducto extends Model
{
    use HasFactory;

    protected $table = 'producto_receta';

    protected $primaryKey = 'prorec_id';

    protected $fillable = [
        'prorec_producto_id',
        'prorec_receta_id',
    ];
}
