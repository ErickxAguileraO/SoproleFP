<?php

namespace App\Http\Controllers\Management;

use App\Http\Services\Management\FileService;
use App\Http\Controllers\Controller;
use App\Http\Resources\AlianzaResource;
use App\Http\Services\Management\AlianzaService;
use App\Models\Alianza;
use App\Models\Editable;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class AlianzaController extends Controller
{
    private $anchoImagen = 2208;
    private $altoImagen =  1242;

    public function index()
    {
        return view('management.alianza.index');
    }

    public function crear()
    {
        return view('management.alianza.crear', [
            'ancho' => $this->anchoImagen,
            'alto' => $this->altoImagen,
            'paginas' => Editable::all()
        ]);
    }

    public function listar()
    {
        return AlianzaResource::collection(Alianza::all());
    }

    public function editar(Alianza $alianza)
    {
        return view('management.alianza.editar', [
            "alianza" => $alianza,
            'ancho' => $this->anchoImagen,
            'alto' => $this->altoImagen,
            'paginas' => Editable::all()
        ]);
    }

    public function store(Request $request)
    {
        $reglasValidacion = [
            'nombre' => ['required', 'string', 'max:250', 'unique:alianzas,ali_nombre'],
            'pagina_editable' => ['required'],
            'estado' => ['required'],
            'orden' => ['required','numeric'],
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
            return AlianzaService::guardar($request);
        }
    }

    public function update(Request $request)
    {
        $reglasValidacion = [
            'nombre' => ['required', 'string', 'max:250'],
            'pagina_editable' => ['required'],
            'estado' => ['required'],
            'orden' => ['required','numeric'],
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
            return AlianzaService::editar($request);
        }
    }

    public function eliminar(Alianza $alianza)
    {
        try {
            FileService::destroy($alianza->ali_imagen);
            $alianza->delete();

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
