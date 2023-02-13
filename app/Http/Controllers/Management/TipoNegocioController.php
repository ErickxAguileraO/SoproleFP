<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use App\Http\Services\Management\TipoNegocioService;
use App\Models\TipoNegocios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TipoNegocioController extends Controller
{
    public function index()
    {
        return view('management.tipo_negocio.index');
    }

    public function crear()
    {
        return view('management.tipo_negocio.crear');
    }

    public function listar()
    {
        return TipoNegocios::all();
    }

    public function editar(TipoNegocios $tipoNegocio)
    {
        return view('management.tipo_negocio.editar', [
            "tipoNegocio" => $tipoNegocio]);
    }

    public function store(Request $request)
    {
        $reglasValidacion = [
            'nombre' => ['required', 'string', 'max:250', 'unique:slider,sli_nombre'],
            'estado' => ['required'],
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
            return TipoNegocioService::guardar($request);
        }
    }

    public function update(Request $request)
    {
        $reglasValidacion = [
            'tipo_negocio_id' => ['required', 'exists:tipo_negocio,tne_id'],
            'nombre' => ['required', 'string', 'max:250'],
            'estado' => ['required'],
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
            return TipoNegocioService::editar($request);
        }
    }

    public function eliminar(TipoNegocios $tipoNegocio)
    {
        try {
            $tipoNegocio->delete();
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
