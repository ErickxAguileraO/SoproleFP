<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use App\Http\Services\Management\RecetaService;
use App\Models\ImagenReceta;
use App\Models\PivoteSubSegmentos;
use App\Models\Producto;
use App\Models\Receta;
use App\Models\RecetaProducto;
use App\Models\RecetaSegmento;
use App\Models\Segmento;
use App\Models\SubSegmento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RecetaController extends Controller
{
    private $anchoImagen = 407;
    private $altoImagen =  320;

    public function index()
    {
        return view('management.receta.index');
    }

    public function crear()
    {
        return view('management.receta.crear', [
            'ancho' => $this->anchoImagen,
            'alto' => $this->altoImagen,
            'subsegmentos' => SubSegmento::all(),
            'productos' => Producto::all(),
            'segmentos' => Segmento::all()
        ]);
    }

    public function listar()
    {
        return Receta::all();
    }

    public function editar(Receta $receta)
    {
        return view('management.receta.editar', [
            "receta" => $receta,
            'ancho' => $this->anchoImagen,
            'alto' => $this->altoImagen,
            'subsegmentos' => SubSegmento::all(),
            'productos' => Producto::all(),
            'segmentos' => Segmento::all(),
            'subsegmentosSeleccionados' => PivoteSubSegmentos::where('psse_receta_id', $receta->rec_id)->pluck('psse_subsegmento_id')->toArray(),
            'productosSeleccionados' => RecetaProducto::where('prorec_receta_id', $receta->rec_id)->pluck('prorec_producto_id')->toArray(),
            'segmentosSeleccionados' => RecetaSegmento::where('recseg_receta_id', $receta->rec_id)->pluck('recseg_segmento_id')->toArray()
        ]);
    }

    public function store(Request $request)
    {
        $reglasValidacion = [
            'titulo' => ['required', 'string', 'max:250'],
            'contenido' => ['required', 'max:5000'],
            //'video' => ['url'],
            'segmentos' => ['required'],
            'productos' => ['required'],
            'orden' => ['required','numeric'],
            'dificultad' => ['required', 'numeric', 'between:1,3'],
            'porciones' => ['required', 'max:200'],
            'ingredientes' => ['required', 'max:5000'],
            'preparacion' => ['required', 'max:5000'],
            'estado' => ['required','numeric'],
            'imagen' => ['required','mimes:jpg,jpeg,png,svg'],
        ];

        $validacion = Validator::make($request->all(), $reglasValidacion);

        if ($validacion->fails()) {
            $layoutError = '';
            foreach ($validacion->errors()->all() as $error) {
                $layoutError .= $error . '<br/>';
            }
            return response()->json([
                'status' => 'F',
                'message' => $layoutError
            ], 400);
        } else {
            return RecetaService::guardar($request);
        }
    }


    public function update(Request $request)
    {
        $reglasValidacion = [
            'receta_id' => ['required', 'numeric'],
            'titulo' => ['required', 'string', 'max:250'],
            'contenido' => ['required', 'max:5000'],
            //'video' => ['url'],
            'segmentos' => ['required'],
            'productos' => ['required'],
            'orden' => ['required','numeric'],
            'dificultad' => ['required', 'numeric', 'between:1,3'],
            'porciones' => ['required', 'max:200'],
            'ingredientes' => ['required', 'max:5000'],
            'preparacion' => ['required', 'max:5000'],
            'estado' => ['required','numeric'],
            'imagen' => ['mimes:jpg,jpeg,png,svg'],
        ];

        $validacion = Validator::make($request->all(), $reglasValidacion);

        if ($validacion->fails()) {
            $layoutError = '';
            foreach ($validacion->errors()->all() as $error) {
                $layoutError .= $error . '<br/>';
            }
            return response()->json([
                'status' => 'F',
                'message' => $layoutError
            ], 400);
        } else {
            return RecetaService::editar($request);
        }
    }

    public function eliminar(Receta $receta)
    {
        return RecetaService::eliminar($receta);
    }

    public function eliminar_imagen(ImagenReceta $imagen){
        return RecetaService::eliminarImagen($imagen);
    }
}
