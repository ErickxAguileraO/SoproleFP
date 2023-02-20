<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Services\Web\MiniSitioService;
use App\Models\Editable;
use App\Models\Segmento;

class MiniSitioController extends Controller
{
    public function index($url)
    { 
        $segmento = Segmento::where('seg_url', $url)->where('seg_estado',1)->firstOrFail();

        return view('web.miniSitios.index',[
            "segmento" =>  $segmento,
            "tags" => $segmento->Subsegmento,
            "sliders" => $segmento->Slider,
            "academias" => $segmento->AcademiaMiniSitio,
            "productos" => MiniSitioService::productosBySegmento($segmento->seg_id),
            "recetas" => $segmento->Receta,
            "noticias" => $segmento->NoticiaMiniSitio,
            "conocenos" => Editable::where('edi_tipo',1)->where('edi_estado',1)->first()
        ]);
    }
}
