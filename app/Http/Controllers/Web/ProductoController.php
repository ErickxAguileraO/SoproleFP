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
    public function index($segmento = false)
    {
        return view('web.productos.index', [
            "segmentos" => Segmento::where('seg_estado', 1)->orderBy('seg_orden', 'ASC')->get(),
            "categorias" => Categoria::where('cat_estado', 1)->orderBy('cat_orden', 'ASC')->get(),
        ]);
    }


    public function getProductos(Request $request)
    {
        return response()->json([
            'status' => 'T',
            'html' => view(
                'web.productos.dinamico',
                [
                    'productos' => ProductoService::getProductos($request->segmentos, $request->categorias)
                ]
            )->render(),
        ], 200);
    }

    public function detalle($producto)
    {
        return view('web.productos.detalle', [
            "producto" => Producto::where('pro_url', $producto)->where('pro_estado', 1)->firstOrFail(),
        ]);
    }
}
