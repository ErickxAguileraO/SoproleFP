<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use App\Http\Services\Management\AcademiaService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Segmento;
use App\Models\SubSegmento;
use App\Models\Academia;
use App\Models\AcademiaSegmento;
use App\Models\PivoteSubSegmentos;

class AcademiaController extends Controller
{
    private $anchoImagen = 300;
    private $altoImagen =  320;

    public function index()
    {
        return view('management.academia.index');
    }

    public function crear()
    {
        return view('management.academia.crear', [
            'ancho' => $this->anchoImagen,
            'alto' => $this->altoImagen,
            'subsegmentos' => SubSegmento::all(),
            'segmentos' => Segmento::all()
        ]);
    }

    public static function listar()
    {
        return Academia::all();
    }

    public function editar(Academia $academia)
    {
        return view('management.academia.editar', [
            "academia" => $academia,
            'ancho' => $this->anchoImagen,
            'alto' => $this->altoImagen,
            'subsegmentos' => SubSegmento::all(),
            'segmentos' => Segmento::all(),
            'subsegmentosSeleccionados' => PivoteSubSegmentos::where('psse_academia_id', $academia->aca_id)->pluck('psse_subsegmento_id')->toArray(),
            'segmentosSeleccionados' => AcademiaSegmento::where('acaseg_academia_id', $academia->aca_id)->pluck('acaseg_segmento_id')->toArray()
        ]);
    }

    public function store(Request $request)
    {
        $reglasValidacion = [
            'titulo' => ['required', 'string', 'max:250'],
            'titulo2' => ['required', 'string', 'max:250'],
            'contenido' => ['required', 'max:2000'],
            'video' => ['url', 'max:250'],
            'segmentos' => ['required'],
            'orden' => ['required','numeric'],
            'imagen' => ['required','mimes:jpg,jpeg,png,svg'],
            'estado' => ['required','numeric'],
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
            return AcademiaService::guardar($request);
        }
    }


    public function update(Request $request)
    {
        $reglasValidacion = [
            'titulo' => ['required', 'string', 'max:250'],
            'titulo2' => ['required', 'string', 'max:250'],
            'contenido' => ['required', 'max:2000'],
            'video' => ['url', 'max:250'],
            'segmentos' => ['required'],
            'imagen' => ['mimes:jpg,jpeg,png,svg'],
            'orden' => ['required','numeric'],
            'estado' => ['required','numeric'],
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
            return AcademiaService::editar($request);
        }
    }

    public function eliminar(Academia $academia)
    {
        return AcademiaService::eliminar($academia);
    }
}
