<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use App\Http\Services\Management\LocalService;
use App\Models\Comuna;
use App\Models\Local;
use App\Models\Region;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LocalController extends Controller
{
    public function index()
    {
        return view('management.local.index');
    }

    public function crear()
    {
        return view('management.local.crear', [
            "regiones" => Region::all()
        ]);
    }

    public function listar()
    {
        return Local::all();
    }

    public function getComunaByRegion($region)
    {
        return LocalService::getComunas($region);
    }

    public function editar(Local $local)
    {
        $comunaActual = Comuna::find($local->loc_comuna_id);

        return view('management.local.editar', [
            "local" => $local,
            "regiones" => Region::all(),
            "region_actual" => $comunaActual->com_region_id,
            "comunas" => Comuna::where('com_region_id', $comunaActual->com_region_id)->get()
        ]);
    }

    public function store(Request $request)
    {
        $reglasValidacion = [
            'nombre' => ['required', 'string', 'max:250'],
            'region' => ['required'],
            'comuna' => ['required'],
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
            return LocalService::guardar($request);
        }
    }


    public function update(Request $request)
    {
        $reglasValidacion = [
            'nombre' => ['required', 'string', 'max:250'],
            'region' => ['required'],
            'comuna' => ['required'],
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
            return LocalService::editar($request);
        }
    }

    public function eliminar(Local $local)
    {
        try {
            $local->delete();

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
