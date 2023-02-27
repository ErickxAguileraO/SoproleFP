<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use App\Http\Services\Management\ConfiguracionService;
use App\Http\Services\Management\FileService;
use App\Models\Configuracion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ConfiguracionController extends Controller
{
    private $anchoImagen = 2208;
    private $altoImagen =  1242;

    public function index()
    {
        return view('management.configuracion.index');
    }

    public function crear()
    {
        return view('management.configuracion.crear', [
            'ancho' => $this->anchoImagen,
            'alto' => $this->altoImagen
        ]);
    }

    public function listar()
    {
        return Configuracion::all();
    }

    public function listarByTipo($tipo)
    {
        return Configuracion::where('con_tipo', $tipo)->first();
    }

    public function editar(Configuracion $configuracion)
    {
        return view('management.configuracion.editar', [
            "configuracion" => $configuracion,
            'ancho' => $this->anchoImagen,
            'alto' => $this->altoImagen
        ]);
    }

    public function store(Request $request)
    {
        $reglasValidacion = [
            'contenido' => ['required', 'string', 'max:3000'],
            'link' => ['url'],
            'tipo' => ['string','max:40'],
            'imagen' => ['mimes:jpg,jpeg,png'],
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
            return ConfiguracionService::guardar($request);
        }
    }

    public function update(Request $request)
    {
        $reglasValidacion = [
            'contenido' => ['required', 'string', 'max:3000'],
            'link' => ['url'],
            'tipo' => ['string','max:40'],
            'imagen' => ['mimes:jpg,jpeg,png'],
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
            return ConfiguracionService::editar($request);
        }
    }

    public function eliminar(Configuracion $configuracion)
    {
        try {
            FileService::destroy($configuracion->con_imagen);
            $configuracion->delete();

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
