<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use App\Http\Services\Management\FileService;
use App\Http\Services\Management\SliderService;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SliderController extends Controller
{

    private $anchoImagen = 2208;
    private $altoImagen =  1242;

    public function index()
    {
        return view('management.slider.index');
    }

    public function crear()
    {
        return view('management.slider.crear', [
            'ancho' => $this->anchoImagen,
            'alto' => $this->altoImagen
        ]);
    }

    public function listar()
    {
        return Slider::all();
    }

    public function editar(Slider $slider)
    {
        return view('management.slider.editar', [
            "slider" => $slider,
            'ancho' => $this->anchoImagen,
            'alto' => $this->altoImagen
        ]);
    }

    public function store(Request $request)
    {
        $reglasValidacion = [
            'nombre' => ['required', 'string', 'max:250', 'unique:slider,sli_nombre'],
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
            return SliderService::guardar($request);
        }
    }

    public function update(Request $request)
    {
        $reglasValidacion = [
            'slider_id' => ['required', 'exists:slider,sli_id'],
            'nombre' => ['required', 'string', 'max:250'],
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
            return SliderService::editar($request);
        }
    }

    public function eliminar(Slider $slider)
    {
        try {
            FileService::destroy($slider->sli_imagen);
            $slider->delete();

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
