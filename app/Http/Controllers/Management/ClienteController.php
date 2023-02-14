<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use App\Http\Services\Management\ClienteService;
use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ClienteController extends Controller
{
    public function index()
    {
        return view('management.cliente.index');
    }

    public function crear()
    {
        return view('management.cliente.crear');
    }

    public function listar()
    {
        return Cliente::all();
    }

    public function editar(Cliente $cliente)
    {
        return view('management.cliente.editar', [
            "cliente" => $cliente
        ]);
    }

    public function store(Request $request)
    {
        $reglasValidacion = [
            'razon_social' => ['required', 'string', 'max:250'],
            'rut' => ['required', 'string', 'max:12'],
            'otro_tipo' => ['required', 'string', 'max:250'],
            'calle' => ['required', 'string', 'max:250'],
            'numero' => ['required', 'numeric'],
            'nombre_contacto' => ['required', 'string', 'max:250'],
            'telefono_contacto' => ['required', 'string', 'max:250'],
            'correo_contacto' => ['required', 'string', 'max:250'],
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
            return ClienteService::guardar($request);
        }
    }

    public function update(Request $request)
    {
        $reglasValidacion = [
            'razon_social' => ['required', 'string', 'max:250'],
            'rut' => ['required', 'string', 'max:12'],
            'otro_tipo' => ['required', 'string', 'max:250'],
            'calle' => ['required', 'string', 'max:250'],
            'numero' => ['required', 'numeric'],
            'nombre_contacto' => ['required', 'string', 'max:250'],
            'telefono_contacto' => ['required', 'string', 'max:250'],
            'correo_contacto' => ['required', 'string', 'max:250'],
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
            return ClienteService::editar($request);
        }
    }

    public function eliminar(Cliente $cliente)
    {
        try {
            $cliente->delete();

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
