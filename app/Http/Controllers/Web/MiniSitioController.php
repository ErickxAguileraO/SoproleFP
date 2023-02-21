<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Services\Web\MiniSitioService;
use App\Models\Editable;
use App\Models\Segmento;
use App\Models\SubSegmento;

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
        ]);
    }


    public function filtrar(SubSegmento $tag, Segmento $segmento)
    {
        $subsegmentosDelSegmento = $segmento->Subsegmento->pluck('sse_id')->toArray();

        $view =  view(
            'web.miniSitios.dinamico',
            [
                "academias" => $segmento->AcademiaMiniSitio,
                "productos" => MiniSitioService::productosBySegmento($segmento->seg_id),
                "recetas" => $segmento->Receta,
                "noticias" => $segmento->NoticiaMiniSitio,
            ]
        )->render();

        return response()->json([
            'status' => 'T',
            'html' => $view,
        ], 200);
    }
}
