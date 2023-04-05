<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use App\Http\Services\Management\CategoriaService;
use App\Models\Categoria;
use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoriaController extends Controller
{
    public function index()
    {
        return view('management.categoria.index');
    }

    public function crear()
    {
        return view('management.categoria.crear');
    }

    public function listar()
    {
        return Categoria::all();
    }

    public function editar(Categoria $categoria)
    {
        return view('management.categoria.editar', [
            "categoria" => $categoria
        ]);
    }

    public function store(Request $request)
    {
        $reglasValidacion = [
            'nombre' => ['required', 'string', 'max:250'],
            'estado' => ['required'],
            'orden' => ['required', 'numeric'],
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
            return CategoriaService::guardar($request);
        }
    }

    public function update(Request $request)
    {
        $reglasValidacion = [
            'categoria_id' => ['required', 'exists:categorias,cat_id'],
            'nombre' => ['required', 'string', 'max:250'],
            'estado' => ['required'],
            'orden' => ['required', 'numeric'],
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
            return CategoriaService::editar($request);
        }
    }

    public function eliminar(Categoria $categoria)
    {
        try {

            $productosConCategoria = Producto::where('pro_categoria_id', $categoria->cat_id)->get();

            if(count($productosConCategoria)>0){

                $html = '';
                foreach($productosConCategoria as $key => $item){
                    $html.= '('.($key+1).") ".$item->pro_titulo.'</br></br>';
                }
                return response()->json([
                    'status' => 'F',
                    'message' => 'No se puede eliminar la categoria, debido a que los siguientes productos la poseen: </br></br>'.$html,
                ], 500);
                exit;
            }
        
            $categoria->delete();

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
