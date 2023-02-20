<?php

namespace App\Http\Services\Web;

use App\Models\Producto;
use Illuminate\Support\Facades\DB;

class MiniSitioService
{
    public static function productosBySegmento($segmento)
    {
        return Producto::select('pro_id','pro_titulo','pro_url')
        ->join('producto_receta', 'pro_id' ,'=', 'prorec_producto_id')
        ->join('recetas', 'rec_id' ,'=', 'prorec_receta_id')
        ->join('receta_segmento', 'rec_id' ,'=', 'recseg_receta_id')
        ->where('pro_estado',1)
        ->where('rec_estado',1)
        ->where('recseg_segmento_id',$segmento)
        ->groupBy('pro_id','pro_titulo','pro_url')
        ->orderBy('pro_orden','ASC')
        ->get();
    }
}
