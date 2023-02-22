<?php

namespace App\Http\Services\Web;

use App\Models\Academia;
use App\Models\Noticia;
use App\Models\Producto;
use App\Models\Receta;
use App\Models\SubSegmento;
use Illuminate\Support\Facades\DB;

class MiniSitioService
{
    public static function productosBySegmento($segmento)
    {
        return Producto::select('pro_id','pro_titulo','pro_url','pro_imagen')
        ->join('producto_receta', 'pro_id' ,'=', 'prorec_producto_id')
        ->join('recetas', 'rec_id' ,'=', 'prorec_receta_id')
        ->join('receta_segmento', 'rec_id' ,'=', 'recseg_receta_id')
        ->where('pro_estado',1)
        ->where('rec_estado',1)
        ->where('recseg_segmento_id',$segmento)
        ->groupBy('pro_id','pro_titulo','pro_url','pro_imagen')
        ->orderBy('pro_orden','ASC')
        ->get();
    }


    public static function productosBySegmentoAndTag($sse, $productosId)
    {
        return Producto::select('pro_id','pro_titulo','pro_url','pro_imagen')
        ->join('pivote_sub_segmentos',"psse_producto_id","=", "pro_id")
        ->whereIn('pro_id', $productosId)
        ->where('psse_subsegmento_id', $sse->sse_id)
        ->where('pro_estado',1)
        ->groupBy('pro_id','pro_titulo','pro_url','pro_imagen')
        ->orderBy('pro_orden','ASC')
        ->get();
    }

    public static function academiasBySegmentoAndTag($sse, $academiasId)
    {
        return Academia::select('aca_id','aca_titulo','aca_url','aca_imagen')
        ->join('pivote_sub_segmentos',"psse_academia_id","=", "aca_id")
        ->whereIn('aca_id', $academiasId)
        ->where('psse_subsegmento_id', $sse->sse_id)
        ->where('aca_estado',1)
        ->groupBy('aca_id','aca_titulo','aca_url','aca_imagen')
        ->orderBy('aca_orden','ASC')
        ->get();
    }

    public static function recetasBySegmentoAndTag($sse, $recetasId)
    {
        return Receta::select('rec_id','rec_titulo','rec_url','rec_imagen')
        ->join('pivote_sub_segmentos',"psse_receta_id","=", "rec_id")
        ->whereIn('rec_id', $recetasId)
        ->where('psse_subsegmento_id', $sse->sse_id)
        ->where('rec_estado',1)
        ->groupBy('rec_id','rec_titulo','rec_url','rec_imagen')
        ->orderBy('rec_orden','ASC')
        ->get();
    }

    public static function noticiasBySegmentoAndTag($sse, $noticiasId)
    {
        return Noticia::select('not_id','not_url','not_titulo','not_titulo2')
        ->join('pivote_sub_segmentos',"psse_noticia_id","=", "not_id")
        ->whereIn('not_id', $noticiasId)
        ->where('psse_subsegmento_id', $sse->sse_id)
        ->groupBy('not_id','not_url','not_titulo','not_titulo2')
        ->where('not_estado',1)
        ->orderBy('not_fecha','DESC')
        ->get();
    }    
}
