<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Segmento;
use App\Models\Slider;

class HomeController extends Controller
{

    public function index()
    {
        return view('web.home',[
            "segmentos" => Segmento::where('seg_estado',1)->orderBy('seg_orden','asc')->get(),
            "sliders" => Slider::where('sli_estado',1)->orderBy('sli_orden','asc')->get(),
        ]);
    }
}
