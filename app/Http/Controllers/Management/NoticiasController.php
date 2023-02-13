<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use App\Http\Services\Management\NoticiaService;
use App\Models\ImagenNoticia;
use App\Models\Noticia;
use App\Models\PivoteSubSegmentos;
use Illuminate\Http\Request;
use App\Models\SubSegmento;
use Illuminate\Support\Facades\Validator;

class NoticiasController extends Controller
{

    private $anchoImagen = 2208;
    private $altoImagen =  1242;

    public function index()
    {
        return view('management.noticias.index');
    }

    public function crear()
    {
        return view('management.noticias.crear', [
            'ancho' => $this->anchoImagen,
            'alto' => $this->altoImagen,
            'subsegmentos' => SubSegmento::all(),
        ]);
    }

    public function listar()
    {
        return Noticia::all();
    }

    public function editar(Noticia $noticia)
    {
        return view('management.noticias.editar', [
            "noticia" => $noticia,
            'ancho' => $this->anchoImagen,
            'alto' => $this->altoImagen,
            'subsegmentos' => SubSegmento::all(),
            'subsegmentosSeleccionados' => PivoteSubSegmentos::where('psse_noticia_id', $noticia->not_id)->pluck('psse_subsegmento_id')->toArray()
        ]);
    }

    public function store(Request $request)
    {
        $reglasValidacion = [
            'titulo' => ['required', 'string', 'max:250'],
            'titulo2' => ['required', 'string', 'max:250'],
            'contenido' => ['required', 'max:2000'],
            'fecha' => ['required', 'date'],
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
            return NoticiaService::guardar($request);
        }
    }


    public function update(Request $request)
    {
        $reglasValidacion = [
            'noticia_id' => ['required'],
            'titulo' => ['required', 'string', 'max:250'],
            'titulo2' => ['required', 'string', 'max:250'],
            'contenido' => ['required', 'max:2000'],
            'fecha' => ['required', 'date'],
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
            return NoticiaService::editar($request);
        }
    }

    public function eliminar(Noticia $noticia)
    {
        return NoticiaService::eliminar($noticia);
    }

    public function eliminar_imagen(ImagenNoticia $imagen){
        return NoticiaService::eliminarImagen($imagen);
    }
}
