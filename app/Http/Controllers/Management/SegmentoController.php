<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use App\Http\Services\Management\SegmentoService;
use App\Models\Segmento;
use App\Models\SubSegmento;
use App\Models\PivoteSubSegmentos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SegmentoController extends Controller
{
    private $anchoImagen = 2208;
    private $altoImagen =  1242;

    public function index()
    {
        return view('management.segmento.index');
    }

    public function crear()
    {
        return view('management.segmento.crear', [
            'ancho' => $this->anchoImagen,
            'alto' => $this->altoImagen,
            'subsegmentos' => SubSegmento::all(),
        ]);
    }

    public function listar()
    {
        return Segmento::all();
    }

    public function listarWithProducto()
    {
        return Segmento::with('Producto')->get();
    }

    public function editar(Segmento $segmento)
    {
        return view('management.segmento.editar', [
            "segmento" => $segmento,
            'ancho' => $this->anchoImagen,
            'alto' => $this->altoImagen,
            'subsegmentos' => SubSegmento::all(),
            'subsegmentosSeleccionados' => PivoteSubSegmentos::where('psse_segmento_id', $segmento->seg_id)->pluck('psse_subsegmento_id')->toArray()
        ]);
    }

    public function store(Request $request)
    {
        $reglasValidacion = [
            'nombre' => ['required', 'string', 'max:250'],
            'color' => ['required'],
            'estado' => ['required'],
            'orden' => ['required', 'numeric'],
            'imagen' => ['required', 'mimes:jpg,jpeg,png'],
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
            return SegmentoService::guardar($request);
        }
    }

    public function update(Request $request)
    {
        $reglasValidacion = [
            'segmento_id' => ['required'],
            'nombre' => ['required', 'string', 'max:250'],
            'color' => ['required'],
            'estado' => ['required'],
            'orden' => ['required', 'numeric'],
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
            return SegmentoService::editar($request);
        }
    }

    public function eliminar(Segmento $segmento)
    {
        try {
            $segmento->delete();

            return response()->json([
                'status' => 'T',
                'message' => 'Registro eliminado correctamente',
            ], 201);
        } catch (\Exception $exc) {
            return response()->json([
                'status' => 'F',
                'message' => 'Ha ocurrido un error inesperado. Inténtelo más tarde.',
            ], 500);
        }
    }
}
