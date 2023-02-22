<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Services\Web\ProductoService;
use App\Models\Categoria;
use App\Models\Producto;
use App\Models\Segmento;
use Illuminate\Http\Request;


class ProductoController extends Controller
{
    public function index(Request $request)
    {
        $segmentosId = $request->segmentoId;
        $categoriasId = $request->categoriasId;

        if(!$segmentosId){
            $segmentosId = [];
        }
        if(!$categoriasId){
            $categoriasId = [];
        }

        if ($request->ajax()) {
            return view('web.productos.dinamico', 
                ['productos' => ProductoService::getProductos($segmentosId, $categoriasId ),
                'segmentosId' => json_encode($segmentosId),
                'categoriasId' => json_encode($categoriasId),
                ]
            )->render();  
        }

        return view('web.productos.index', [
            "productos" => ProductoService::getProductos($segmentosId, $categoriasId ),
            "categorias" => Categoria::all(),
            "segmentos" =>  Segmento::where('seg_estado', 1)->orderby('seg_orden', 'asc')->get(),
            "segmentosId" =>  !is_null($segmentosId) ? json_encode($segmentosId) : NULL,
            'categoriasId' => !is_null($categoriasId) ? json_encode($categoriasId) : NULL,
        ]);
    }

    public function detalle($categoria, $url)
    {

        $categoria = Categoria::where('cat_id',$categoria)->where('cat_estado',1)->firstOrFail();

        return view('web.productos.detalle', [
            "producto" => Producto::where('pro_url', $url)->where('pro_estado', 1)->where('pro_categoria_id', $categoria->cat_id)->firstOrFail(),
        ]);
    }
}
