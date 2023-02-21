<?php

namespace App\Http\Services\Web;

use Illuminate\Support\Facades\DB;

class ProductoService
{
    public static function getProductos($segmentosIds, $categoriasIds)
    {

        $query = DB::table('productos');
        $query->select('pro_id', 'pro_titulo', 'pro_url', 'pro_imagen');
        $query->join('producto_receta', 'pro_id', '=', 'prorec_producto_id');
        $query->join('recetas', 'rec_id', '=', 'prorec_receta_id');
        $query->join('receta_segmento', 'rec_id', '=', 'recseg_receta_id');
        $query->where('pro_estado', 1);
        $query->where('rec_estado', 1);

        if (count($segmentosIds) > 0) {
            $query->whereIn('recseg_segmento_id', $segmentosIds);
        }
        if (count($categoriasIds) > 0) {
            $query->whereIn('pro_categoria_id', $categoriasIds);
        }

        $query->groupBy('pro_id', 'pro_titulo', 'pro_url', 'pro_imagen');
        $query->orderBy('pro_orden', 'ASC');

        $result = $query->get();

        return $result;
    }
}
