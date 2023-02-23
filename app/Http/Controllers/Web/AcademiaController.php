<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Academia;
use App\Models\Segmento;
use Illuminate\Http\Request;

class AcademiaController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            if (is_null($request->segmentoId)) {        
                return view('web.academia.data', 
                    ['academias' => Academia::with('segmentos')->where('aca_estado', 1)->orderby('aca_orden', 'desc')->orderby('aca_id', 'desc')->paginate(12), 
                    'segmentosId' => NULL]
                    )->render();  
            } else {
                return view('web.academia.data', 
                    ['academias' => Academia::with('segmentos')->whereHas('segmentos', function ($query) use($request){
                        $query->whereIn('acaseg_segmento_id', $request->segmentoId);
                        })->where('aca_estado', 1)->orderby('aca_orden', 'desc')->orderby('aca_id', 'desc')->paginate(12), 
                    'segmentosId' => json_encode($request->segmentoId)]
                )->render();  
            }
        }

        if ($request->has('segmentoId')) {      
            $academias = Academia::with('segmentos')->whereHas('segmentos', function ($query) use($request){
                $query->whereIn('acaseg_segmento_id', $request->segmentoId);
            })->where('aca_estado', 1)->orderby('aca_orden', 'desc')->orderby('aca_id', 'desc')->paginate(12);  
        } else {
            $academias = Academia::with('segmentos')->where('aca_estado', 1)->orderby('aca_orden', 'desc')->orderby('aca_id', 'desc')->paginate(12);  
        }

        return view('web.academia.index', [
            "academias" =>  $academias,
            "segmentos" =>  Segmento::where('seg_estado', 1)->orderby('seg_orden', 'asc')->get(),
            "segmentosId" =>  !is_null($request->segmentoId) ? json_encode($request->segmentoId) : NULL,
        ]);
    }

    public function detalle($academiaId)
    {
        return view('web.academia.detalle', [
            "academia" => Academia::where('aca_id', $academiaId)->where('aca_estado', 1)->firstOrFail(),
        ]);
    }
}
