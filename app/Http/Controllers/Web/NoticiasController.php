<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Noticia;
use App\Models\Segmento;
use Illuminate\Http\Request;

class NoticiasController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            if (is_null($request->segmentoId)) {        
                return view('web.noticias.data', 
                    ['noticias' => Noticia::with('imagenes','segmentos')->where('not_estado', 1)->orderby('not_fecha', 'desc')->orderby('not_id', 'desc')->paginate(6), 
                    'segmentosId' => NULL]
                    )->render();  
            } else {
                return view('web.noticias.data', 
                    ['noticias' => Noticia::with('imagenes','segmentos')->whereHas('segmentos', function ($query) use($request){
                        $query->whereIn('notseg_segmento_id', $request->segmentoId);
                        })->where('not_estado', 1)->orderby('not_fecha', 'desc')->orderby('not_id', 'desc')->paginate(6), 
                    'segmentosId' => json_encode($request->segmentoId)]
                )->render();  
            }
        }

        if ($request->has('segmentoId')) {      
            $noticias = Noticia::with('imagenes','segmentos')->whereHas('segmentos', function ($query) use($request){
                $query->whereIn('notseg_segmento_id', $request->segmentoId);
            })->where('not_estado', 1)->orderby('not_fecha', 'desc')->orderby('not_id', 'desc')->paginate(6);  
        } else {
            $noticias = Noticia::with('imagenes','segmentos')->where('not_estado', 1)->orderby('not_fecha', 'desc')->orderby('not_id', 'desc')->paginate(6);  
        }

        return view('web.noticias.index', [
            "noticias" =>  $noticias,
            "ultimasnoticias" =>  Noticia::with('imagenes')->where('not_estado', 1)->orderby('not_fecha', 'desc')->orderby('not_id', 'desc')->take(3)->get(),
            "segmentos" =>  Segmento::where('seg_estado', 1)->orderby('seg_orden', 'asc')->get(),
            "segmentosId" =>  !is_null($request->segmentoId) ? json_encode($request->segmentoId) : NULL,
        ]);
    }

    public function detalle($noticiaId)
    {
        return view('web.noticias.detalle', [
            "noticia" => Noticia::with('imagenes')->where('not_id', $noticiaId)->where('not_estado', 1)->firstOrFail(),
        ]);
    }
}
