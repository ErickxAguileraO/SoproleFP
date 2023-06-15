<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Academia;
use App\Models\Editable;
use App\Models\Noticia;
use App\Models\Producto;
use App\Models\Receta;
use App\Models\Segmento;
use App\Models\Slider;
use App\Models\Titulo;
use App\Models\Metadatos;

class HomeController extends Controller
{


    public function index()
    {
        return view('web.home',[
            "segmentos" => Segmento::where('seg_estado',1)->orderBy('seg_orden','asc')->get(),
            "sliders" => Slider::where('sli_estado',1)->orderBy('sli_orden','asc')->get(),
            "academias" => Academia::where('aca_estado',1)->orderBy('aca_orden','asc')->limit(4)->get(),
            "productos" => Producto::where('pro_estado',1)->orderBy('pro_orden','asc')->limit(4)->get(),
            "recetas" => Receta::where('rec_estado',1)->orderBy('rec_orden','asc')->limit(3)->get(),
            "noticias" => Noticia::where('not_estado',1)->orderBy('not_fecha','desc')->limit(3)->get(),
            "conocenos" => Editable::where('edi_tipo',1)->where('edi_estado',1)->first(),
            'result' => Titulo::first(),
            'metaData' => Metadatos::first()
        ]);
    }
}
