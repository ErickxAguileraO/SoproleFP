<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Noticia;
use App\Models\Segmento;

class NoticiasController extends Controller
{
    public function index()
    {
        return view('web.noticias.index', [
            "noticias" =>  Noticia::with('imagenes')->where('not_estado', 1)->orderby('not_fecha', 'desc')->orderby('not_id', 'desc')->paginate(6),
            "segmentos" =>  Segmento::whereHas('Academia')->where('seg_estado', 1)->orderby('seg_orden', 'asc')->get(),
        ]);
    }

    public function listado($segmentoId)
    {
        return Noticia::with('imagenes')->where('not_estado', 1)->orderby('not_fecha', 'desc')->get();
    }

    public function detalle($noticiaId)
    {
        return view('web.noticias.detalle', [
            "noticia" => Noticia::with('imagenes')->where('not_id', $noticiaId)->where('not_estado', 1)->firstOrFail(),
        ]);
    }
}
