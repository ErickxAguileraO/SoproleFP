<?php

namespace App\Http\Services\Management;

use App\Models\ImagenProducto;
use App\Models\PivoteSubSegmentos;
use App\Models\Producto;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductoService
{
    public static function guardar($request)
    {
        DB::beginTransaction();

        try {
            $insert = [
                'pro_titulo' => $request->titulo,
                'pro_sku' => $request->sku,
                'pro_formato' => $request->formato,
                'pro_contenido' => $request->contenido,
                'pro_conservacion' => $request->conservacion,
                'pro_unidades_venta' => $request->unidades_venta,
                'pro_vida_util' => $request->vida_util,
                'pro_categoria_id' => $request->categoria,
                'pro_orden' => $request->orden,
                'pro_estado' => $request->estado,
                'pro_url' => Str::slug($request->titulo)
            ];

            if ($request->file('imagen')) {
                $insert['pro_imagen'] = FileService::upload($request->file('imagen'), 'imagenes/productos');
            }


            $producto = Producto::create($insert);

            if ($request->file('imagenes') != null && count($request->file('imagenes')) > 0) {
                foreach ($request->file('imagenes') as $imagen) {
                    ImagenProducto::create([
                        "ipr_imagen" => FileService::uploadCustomName($imagen, 'imagenes/productos/' . $producto->pro_id),
                        "ipr_producto_id" => $producto->pro_id
                    ]);
                }
            }

            if ($request->subsegmentos != null && is_array($request->subsegmentos)) {
                foreach ($request->subsegmentos as $sse) {
                    PivoteSubSegmentos::create([
                        "psse_subsegmento_id" => intval($sse),
                        "psse_producto_id" =>  intval($producto->pro_id)
                    ]);
                }
            }

            DB::commit();

            return response()->json([
                'status' => 'T',
                'message' => 'Registro creado correctamente',
            ], 201);
        } catch (\Exception $exc) {
            DB::rollBack();
            return response()->json([
                'status' => 'F',
                'message' => 'Ha ocurrido un error inesperado. Inténtelo más tarde.',
            ], 500);
        }
    }

    public static function editar($request)
    {
        DB::beginTransaction();

        try {

            $producto = Producto::find($request->producto_id);
            $producto->pro_titulo = $request->titulo;
            $producto->pro_sku = $request->sku;
            $producto->pro_formato = $request->formato;
            $producto->pro_contenido = $request->contenido;
            $producto->pro_conservacion = $request->conservacion;
            $producto->pro_unidades_venta = $request->unidades_venta;
            $producto->pro_vida_util = $request->vida_util;
            $producto->pro_categoria_id = $request->categoria;
            $producto->pro_orden = $request->orden;
            $producto->pro_estado = $request->estado;
            $producto->pro_url = Str::slug($request->titulo);

            if ($request->file('imagen')) {
                $producto->pro_imagen = FileService::upload($request->file('imagen'), 'imagenes/productos');
            }


            $producto->save();

            if ($request->file('imagenes') != null && count($request->file('imagenes')) > 0) {
                foreach ($request->file('imagenes') as $imagen) {
                    ImagenProducto::create([
                        "ipr_imagen" => FileService::uploadCustomName($imagen, 'imagenes/productos/' . $producto->pro_id),
                        "ipr_producto_id" => $producto->pro_id
                    ]);
                }
            }

            PivoteSubSegmentos::where('psse_producto_id', $producto->pro_id)->delete();

            if ($request->subsegmentos != null && is_array($request->subsegmentos)) {
                foreach ($request->subsegmentos as $sse) {
                    PivoteSubSegmentos::create([
                        "psse_subsegmento_id" => intval($sse),
                        "psse_producto_id" =>  intval($producto->pro_id)
                    ]);
                }
            }

            DB::commit();

            return response()->json([
                'status' => 'T',
                'message' => 'Registro actualizado correctamente',
            ], 201);
        } catch (\Exception $exc) {
            DB::rollBack();
            return response()->json([
                'status' => 'F',
                'message' => 'Ha ocurrido un error inesperado. Inténtelo más tarde.',
            ], 500);
        }
    }

    public static function eliminar($producto)
    {

        try {
            $imagenes = ImagenProducto::where('ipr_producto_id', $producto->pro_id)->get();

            foreach ($imagenes as $imagen) {
                FileService::destroy($imagen->ipr_imagen);
                $imagen->delete();
            }

            PivoteSubSegmentos::where('psse_producto_id', $producto->pro_id)->delete();

            $producto->delete();

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

    public static function eliminarImagen($imagen)
    {
        try {
            FileService::destroy($imagen->ino_imagen);
            $imagen->delete();

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
