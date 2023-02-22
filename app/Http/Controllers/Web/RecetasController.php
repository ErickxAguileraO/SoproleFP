<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Producto;
use App\Models\Receta;
use App\Models\Segmento;
use Illuminate\Http\Request;

class RecetasController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            if (is_null($request->segmentoId) && is_null($request->productoId)) {        
                return view('web.recetas.data', 
                    ['recetas' => Receta::with('imagenes','segmentos','Producto')->where('rec_estado', 1)->orderby('rec_orden', 'desc')->orderby('rec_id', 'desc')->paginate(12), 
                    'segmentosId' => NULL,
                    'productosId' => NULL]
                    )->render();  
            } else {
                return view('web.recetas.data', 
                    ['recetas' => Receta::with('imagenes','segmentos','Producto')
                        ->whereHas('segmentos', function ($query) use($request){
                            if ($request->has('segmentoId')) {
                                $query->whereIn('recseg_segmento_id', $request->segmentoId);
                            }
                        })
                        ->whereHas('Producto', function ($query) use($request){
                            if ($request->has('productoId')) {
                                $query->whereIn('prorec_producto_id', $request->productoId);
                            }
                        })
                        ->where('rec_estado', 1)->orderby('rec_orden', 'desc')->orderby('rec_id', 'desc')->paginate(12), 
                    'segmentosId' => json_encode($request->segmentoId),
                    'productosId' => json_encode($request->productoId)]
                )->render();  
            }
        }

        if ($request->has('segmentoId') || $request->has('productoId')) {
            $recetas = Receta::with('imagenes','segmentos','Producto')
                ->whereHas('segmentos', function ($query) use($request){
                    if ($request->has('segmentoId')) {
                        $query->whereIn('recseg_segmento_id', $request->segmentoId);
                    }
                })
                ->whereHas('Producto', function ($query) use($request){
                    if ($request->has('productoId')) {
                        $query->whereIn('prorec_producto_id', $request->productoId);
                    }
                })
                ->where('rec_estado', 1)->orderby('rec_orden', 'desc')->orderby('rec_id', 'desc')->paginate(12);  
        } else {
            $recetas = Receta::with('imagenes','segmentos','Producto')->where('rec_estado', 1)->orderby('rec_orden', 'desc')->orderby('rec_id', 'desc')->paginate(12);  
        }

        return view('web.recetas.index', [
            "recetas" =>  $recetas,
            "segmentos" =>  Segmento::where('seg_estado', 1)->orderby('seg_orden', 'asc')->get(),
            "productos" =>  Producto::where('pro_estado', 1)->orderby('pro_orden', 'asc')->get(),
            "segmentosId" =>  !is_null($request->segmentoId) ? json_encode($request->segmentoId) : NULL,
            "productosId" =>  !is_null($request->productoId) ? json_encode($request->productoId) : NULL,
        ]);
    }

    public function detalle($recetaId)
    {
        return view('web.recetas.detalle', [
            "receta" => Receta::with('imagenes','segmentos','Producto')->where('rec_id', $recetaId)->where('rec_estado', 1)->firstOrFail(),
        ]);
    }
}
