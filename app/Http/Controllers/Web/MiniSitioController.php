<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Services\Web\MiniSitioService;
use App\Models\Segmento;
use App\Models\SubSegmento;
use App\Models\Titulo;

class MiniSitioController extends Controller
{
    public function index($url)
    {
        $segmento = Segmento::where('seg_url', $url)->where('seg_estado', 1)->firstOrFail();

        return view('web.miniSitios.index', [
            "segmento" =>  $segmento,
            "tags" => $segmento->Subsegmento,
            "sliders" => $segmento->Slider,
            "academias" => $segmento->AcademiaMiniSitio,
            "productos" => MiniSitioService::productosBySegmento($segmento->seg_id),
            "recetas" => $segmento->Receta,
            "noticias" => $segmento->NoticiaMiniSitio,
            'result' => Titulo::find(1)
        ]);
    }


    public function filtrar(SubSegmento $tag, Segmento $segmento)
    {
        $productosIds =  MiniSitioService::productosBySegmento($segmento->seg_id)->pluck('pro_id')->toArray();
        $AcademiasIds =  $segmento->AcademiaMiniSitio->pluck('aca_id')->toArray();
        $RecetasIds =  $segmento->Receta->pluck('rec_id')->toArray();
        $NoticiasIds =  $segmento->NoticiaMiniSitio->pluck('not_id')->toArray();

        return response()->json([
            'status' => 'T',
            'html' => view(
                'web.miniSitios.dinamico',
                [
                    "academias" => MiniSitioService::academiasBySegmentoAndTag($tag, $AcademiasIds),
                    "productos" => MiniSitioService::productosBySegmentoAndTag($tag, $productosIds),
                    "recetas" => MiniSitioService::recetasBySegmentoAndTag($tag, $RecetasIds),
                    "noticias" => MiniSitioService::noticiasBySegmentoAndTag($tag, $NoticiasIds),
                    "segmento" => $segmento
                ]
            )->render(),
        ], 200);
    }

    public function reset(Segmento $segmento)
    {
        return response()->json([
            'status' => 'T',
            'html' => view(
                'web.miniSitios.dinamico',
                [
                    "academias" => $segmento->AcademiaMiniSitio,
                    "productos" => MiniSitioService::productosBySegmento($segmento->seg_id),
                    "recetas" => $segmento->Receta,
                    "noticias" => $segmento->NoticiaMiniSitio,
                    "segmento" => $segmento
                ]
            )->render(),
        ], 200);
    }
}
