<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use App\Models\Academia;
use App\Models\Alianza;
use App\Models\Categoria;
use App\Models\Cliente;
use App\Models\Contacto;
use App\Models\Slider;
use App\Models\Editable;
use App\Models\Local;
use App\Models\Noticia;
use App\Models\Producto;
use App\Models\Receta;
use App\Models\Segmento;
use App\Models\SubSegmento;
use App\Models\TipoNegocios;

class HomeController extends Controller
{

    public function index()
    {
        return view('management.home.index');
    }

    public function contar()
    {
        return response()->json([
            'status' => 'T',
            'data' => [
                "slider" => Slider::all()->count(),
                "editable" => Editable::all()->count(),
                "alianza" => Alianza::all()->count(),
                "producto" => Producto::all()->count(),
                "categoria" => Categoria::all()->count(),
                "receta" => Receta::all()->count(),
                "segmento" => Segmento::all()->count(),
                "academia" => Academia::all()->count(),
                "noticia" => Noticia::all()->count(),
                "contacto" => Contacto::all()->count(),
                "tipo_negocio" => TipoNegocios::all()->count(),
                "subsegmento" => SubSegmento::all()->count(),
                "clientes" => Cliente::all()->count(),
                "locales" => Local::all()->count(),
            ]
        ], 200);
    }
}
