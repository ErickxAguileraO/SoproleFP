<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Academia;
use App\Models\Segmento;

class AcademiaController extends Controller
{
    public function index()
    {
        return view('web.academia.index', [
            "segmentos" =>  Segmento::whereHas('Academia')->where('seg_estado', 1)->orderby('seg_orden', 'asc')->get()
        ]);
    }

    public function detalle($academia)
    {
        return view('web.academia.detalle', [
            "academia" => Academia::where('aca_url', $academia)->where('aca_estado', 1)->firstOrFail(),
        ]);
    }
}
