<?php

namespace App\Http\Services\Web;

use App\Models\Producto;
use Illuminate\Support\Facades\DB;

class ProductoService
{
    public static function getProductos($segmentosIds, $categoriasIds)
    {

        if (count($segmentosIds) == 0 && count($categoriasIds) == 0) {
            return Producto::where('pro_estado', 1)
                ->groupBy('pro_id')
                ->orderBy('pro_orden', 'ASC')
                ->paginate(12);
        }

        if (count($segmentosIds) > 0 && count($categoriasIds) == 0) {
            return Producto::where('pro_estado', 1)
                ->join('producto_receta', 'pro_id', '=', 'prorec_producto_id')
                ->join('recetas', 'rec_id', '=', 'prorec_receta_id')
                ->join('receta_segmento', 'rec_id', '=', 'recseg_receta_id')
                ->where('rec_estado', 1)
                ->whereIn('recseg_segmento_id', $segmentosIds)
                ->groupBy('pro_id')
                ->orderBy('pro_orden', 'ASC')
                ->paginate(12);
        }

        if (count($segmentosIds) == 0 && count($categoriasIds) > 0) {
            return Producto::where('pro_estado', 1)
                ->whereIn('pro_categoria_id', $categoriasIds)
                ->groupBy('pro_id')
                ->orderBy('pro_orden', 'ASC')
                ->paginate(12);
        }

        if (count($segmentosIds) > 0 && count($categoriasIds) > 0) {
            return Producto::where('pro_estado', 1)
                ->join('producto_receta', 'pro_id', '=', 'prorec_producto_id')
                ->join('recetas', 'rec_id', '=', 'prorec_receta_id')
                ->join('receta_segmento', 'rec_id', '=', 'recseg_receta_id')
                ->where('rec_estado', 1)
                ->whereIn('recseg_segmento_id', $segmentosIds)
                ->whereIn('pro_categoria_id', $categoriasIds)
                ->groupBy('pro_id')
                ->orderBy('pro_orden', 'ASC')
                ->paginate(12);
        }
    }
}
