<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use App\Http\Services\Management\ProductoService;
use App\Models\Categoria;
use App\Models\ImagenProducto;
use App\Models\PivoteSubSegmentos;
use App\Models\Producto;
use App\Models\SubSegmento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductoController extends Controller
{
    
    private $anchoImagen = 300;
    private $altoImagen =  320;

    public function index()
    {
        return view('management.producto.index');
    }

    public function crear()
    {
        return view('management.producto.crear', [
            'ancho' => $this->anchoImagen,
            'alto' => $this->altoImagen,
            'categorias' => Categoria::all(),
            'subsegmentos' => SubSegmento::all(),
            'ancho' => $this->anchoImagen,
            'alto' => $this->altoImagen
        ]);
    }

    public function listar()
    {
        return Producto::all();
    }

    public function editar(Producto $producto)
    {

        return view('management.producto.editar', [
            "producto" => $producto,
            'ancho' => $this->anchoImagen,
            'alto' => $this->altoImagen,
            'categorias' => Categoria::all(),
            'subsegmentos' => SubSegmento::all(),
            'subsegmentosSeleccionados' => PivoteSubSegmentos::where('psse_producto_id', $producto->pro_id)->pluck('psse_subsegmento_id')->toArray(),
            'ancho' => $this->anchoImagen,
            'alto' => $this->altoImagen
        ]);
    }

    public function store(Request $request)
    {
        $reglasValidacion = [
            'titulo' => ['required', 'string', 'max:250'],
            'sku' => ['required', 'string', 'max:250'],
            'contenido' => ['required', 'max:3000'],
            'conservacion' => ['required', 'max:3000'],
            'formato' => ['required', 'string', 'max:250'],
            'vida_util' => ['required', 'string', 'max:250'],
            'unidades_venta' => ['required', 'numeric'],
            'orden' => ['required', 'numeric'],
            'categoria' => ['required', 'numeric'],
            'estado' => ['required'],
            'imagen' => ['required', 'mimes:jpg,jpeg,png,svg'],
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
            return ProductoService::guardar($request);
        }
    }


    public function update(Request $request)
    {
        $reglasValidacion = [
            'producto_id' => ['required'],
            'titulo' => ['required', 'string', 'max:250'],
            'sku' => ['required', 'string', 'max:250'],
            'contenido' => ['required', 'max:3000'],
            'conservacion' => ['required', 'max:3000'],
            'formato' => ['required', 'string', 'max:250'],
            'vida_util' => ['required', 'string', 'max:250'],
            'unidades_venta' => ['required', 'numeric'],
            'orden' => ['required', 'numeric'],
            'categoria' => ['required', 'numeric'],
            'estado' => ['required'],
            'imagen' => ['mimes:jpg,jpeg,png,svg'],
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
            return ProductoService::editar($request);
        }
    }

    public function eliminar(Producto $producto)
    {
        return ProductoService::eliminar($producto);
    }

    public function eliminar_imagen(ImagenProducto $imagen){
        return ProductoService::eliminarImagen($imagen);
    }
}
