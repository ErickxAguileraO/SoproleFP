<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use App\Http\Services\Management\ClienteService;
use App\Models\Cliente;
use App\Models\Editable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use Malahierba\ChileRut\ChileRut;
use Malahierba\ChileRut\Rules\ValidChileanRut;


class ClienteController extends Controller
{
    private $anchoImagen = 407;
    private $altoImagen =  320;

    public function index()
    {
        return view('management.cliente.index');
    }

    public function crear()
    {
        return view('management.cliente.crear',[
            'editables' => Editable::all(),
            'ancho' => $this->anchoImagen,
            'alto' => $this->altoImagen,
        ]);
    }

    public function listar()
    {
        return Cliente::all();
    }

    public function editar(Cliente $cliente)
    {
        return view('management.cliente.editar', [
            "cliente" => $cliente,
            'editables' => Editable::all(),
            'ancho' => $this->anchoImagen,
            'alto' => $this->altoImagen,
        ]);
    }

    public function store(Request $request)
    {
        $reglasValidacion = [
            'nombre' => ['required', 'string', 'max:250'],
            'imagen' => ['required', 'mimes:jpg,jpeg,png,svg'],
            'editable' => ['required','numeric'],
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
            'nombre' => ['required', 'string', 'max:250'],
            'imagen' => ['nullable', 'mimes:jpg,jpeg,png,svg'],
            'editable' => ['required','numeric'],
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
