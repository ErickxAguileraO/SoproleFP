<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use App\Http\Services\Management\EditableService;
use App\Http\Services\Management\FileService;
use App\Models\Editable;
use App\Models\ImagenEditable;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EditableController extends Controller
{
    public function index()
    {
        return view('management.editable.index');
    }

    public function crear()
    {
        return view('management.editable.crear');
    }

    public function listar()
    {
        return Editable::all();
    }

    public static function listarByTipo($tipo)
    {
        return Editable::where('edi_tipo',$tipo)->where('edi_estado',1)->first();
    }

    public function editar(Editable $editable)
    {
        return view('management.editable.editar', [
            "editable" => $editable
        ]);
    }

    public function store(Request $request)
    {
        $reglasValidacion = [
            'titulo' => ['required', 'string', 'max:250'],
            'estado' => ['required'],
            'contenido' => ['required','max:6000' ],
            'tipo' => ['required', 'max:250'],
            'video' => ['nullable', 'url'],
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
            return EditableService::guardar($request);
        }
    }

    public function update(Request $request)
    {
        $reglasValidacion = [
            'editable_id' => ['required'],
            'estado' => ['required'],
            'titulo' => ['required', 'string', 'max:250'],
            'contenido' => ['required','max:6000' ],
            'tipo' => ['required', 'max:250'],
            'video' => ['nullable', 'url', 'max:250'],
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
            return EditableService::editar($request);
        }
    }

    public function eliminar(Editable $editable)
    {
        return EditableService::eliminar($editable);
    }

    public function eliminar_imagen(ImagenEditable $imagen){
        return EditableService::eliminarImagen($imagen);
    }
}
