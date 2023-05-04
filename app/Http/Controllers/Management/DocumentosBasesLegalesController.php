<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use App\Http\Services\Management\FileService;
use App\Http\Services\Management\DocumentosBasesLegalesService;

use App\Models\DocumentosBasesLegales;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class DocumentosBasesLegalesController extends Controller
{
    public function index()
    {
        return view('management.bases_legales.index');
    }

    public function crear()
    {
        return view('management.bases_legales.crear');
    }

    public function listar()
    {
        return DocumentosBasesLegales::all();
    }

    public function editar(DocumentosBasesLegales $documento)
    {
        return view('management.bases_legales.editar', [
            "documento" => $documento
        ]);
    }

    public function store(Request $request)
    {
        $reglasValidacion = [
            'nombre' => ['required', 'string', 'max:250', 'unique:slider,sli_nombre'],
            'orden' => ['required','numeric'],
            'archivo' => ['required', 'mimes:pdf'],
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
            return DocumentosBasesLegalesService::guardar($request);
        }
    }


    public function update(Request $request)
    {
        $reglasValidacion = [
            'nombre' => ['required', 'string', 'max:250', 'unique:slider,sli_nombre'],
            'orden' => ['required','numeric'],
            'archivo' => ['nullable', 'mimes:pdf'],
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
            return DocumentosBasesLegalesService::editar($request);
        }
    }

    public function eliminar(DocumentosBasesLegales $documento)
    {
        try {
            
            $documento->delete();

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
