<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use App\Http\Services\Management\SubSegmentoService;
use App\Models\SubSegmento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SubSegmentosController extends Controller
{
    public function index()
    {
        return view('management.subsegmento.index');
    }

    public function crear()
    {
        return view('management.subsegmento.crear');
    }

    public function listar()
    {
        return SubSegmento::all();
    }

    public function editar(SubSegmento $subsegmento)
    {
        return view('management.subsegmento.editar', [
            "subSegmento" => $subsegmento
        ]);
    }

    public function store(Request $request)
    {
        $reglasValidacion = [
            'nombre' => ['required', 'string', 'max:250'],
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
            return SubSegmentoService::guardar($request);
        }
    }

    public function update(Request $request)
    {
        $reglasValidacion = [
            'subsegmento_id' => ['required', 'exists:sub_segmentos,sse_id'],
            'nombre' => ['required', 'string', 'max:250'],
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
            return SubSegmentoService::editar($request);
        }
    }

    public function eliminar(SubSegmento $subsegmento)
    {
        try {
            $productos = $subsegmento->productos;

            if($productos && count($productos)>0){
                $html = '';
                foreach($productos as $key => $item){
                    $html.= '('.($key+1).") ".$item->pro_titulo.'</br></br>';
                }
                return response()->json([
                    'status' => 'F',
                    'message' => 'No se puede eliminar el subsegmento, debido a que los siguientes productos la poseen: </br></br>'.$html,
                ], 500);
                exit;
            }

            $subsegmento->delete();

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
