<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SubSegmento extends Model
{
    use HasFactory;

    protected $table = 'sub_segmentos';

    protected $primaryKey = 'sse_id';

    protected $fillable = [
        'sse_nombre',
        'sse_orden',
        'sse_estado',
    ];


    public function productos()
    {
        return $this->belongsToMany(Producto::class, 'pivote_sub_segmentos', 'psse_subsegmento_id', 'psse_producto_id');
    }
}
