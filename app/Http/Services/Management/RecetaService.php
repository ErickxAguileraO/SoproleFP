<?php

namespace App\Http\Services\Management;

use App\Models\ImagenNoticia;
use App\Models\ImagenReceta;
use App\Models\PivoteSubSegmentos;
use App\Models\Receta;
use App\Models\RecetaProducto;
use App\Models\RecetaSegmento;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class RecetaService
{
    public static function guardar($request)
    {
        DB::beginTransaction();

        try {

            $insert = [
                'rec_titulo' => $request->titulo,
                'rec_url' => Str::slug($request->titulo),
                'rec_contenido' => $request->contenido,
                'rec_video' => $request->video,
                'rec_titulo_video' => $request->titulo_video_uno,
                'rec_titulo_video_dos' => $request->titulo_video_dos,
                'rec_video_dos' => $request->video_dos,
                'rec_orden' => $request->orden,
                'rec_dificultad' => $request->dificultad,
                'rec_porciones' => $request->porciones,
                'rec_ingredientes' => $request->ingredientes,
                'rec_preparacion' => $request->preparacion,
                'rec_estado' => $request->estado,
            ];

            if ($request->file('imagen')) {
                $insert['rec_imagen'] = FileService::upload($request->file('imagen'), 'imagenes/recetas');
            }

            $receta =  Receta::create($insert);

            if ($request->file('imagenes') != null && count($request->file('imagenes')) > 0) {
                foreach ($request->file('imagenes') as $imagen) {
                    ImagenReceta::create([
                        "ire_imagen" => FileService::upload($imagen, 'imagenes/recetas'),
                        "ire_receta_id" => $receta->rec_id
                    ]);
                }
            }

            if ($request->subsegmentos != null && is_array($request->subsegmentos)) {
                foreach ($request->subsegmentos as $sse) {
                    PivoteSubSegmentos::create([
                        "psse_subsegmento_id" => intval($sse),
                        "psse_receta_id" =>  intval($receta->rec_id)
                    ]);
                }
            }

            if ($request->segmentos != null && is_array($request->segmentos)) {
                foreach ($request->segmentos as $seg) {
                    RecetaSegmento::create([
                        "recseg_segmento_id" => intval($seg),
                        "recseg_receta_id" =>  intval($receta->rec_id)
                    ]);
                }
            }

            if ($request->productos != null && is_array($request->productos)) {
                foreach ($request->productos as $pro) {
                    RecetaProducto::create([
                        "prorec_producto_id" => intval($pro),
                        "prorec_receta_id" =>  intval($receta->rec_id)
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

            $receta = Receta::find($request->receta_id);
            $receta->rec_titulo =  $request->titulo;
            $receta->rec_url =  Str::slug($request->titulo);
            $receta->rec_contenido = $request->contenido;
            $receta->rec_video = $request->video;
            $receta->rec_titulo_video = $request->titulo_video_uno;
            $receta->rec_titulo_video_dos = $request->titulo_video_dos;
            $receta->rec_video_dos = $request->video_dos;
            $receta->rec_orden =  $request->orden;
            $receta->rec_dificultad = $request->dificultad;
            $receta->rec_porciones = $request->porciones;
            $receta->rec_ingredientes = $request->ingredientes;
            $receta->rec_preparacion = $request->preparacion;
            $receta->rec_estado = $request->estado;

            if ($request->file('imagen')) {
                $receta->rec_imagen = FileService::upload($request->file('imagen'), 'imagenes/recetas');
            }



            $receta->save();

            if ($request->file('imagenes') != null && count($request->file('imagenes')) > 0) {
                foreach ($request->file('imagenes') as $imagen) {
                    ImagenReceta::create([
                        "ire_imagen" => FileService::upload($imagen, 'imagenes/recetas'),
                        "ire_receta_id" => $receta->rec_id
                    ]);
                }
            }

            PivoteSubSegmentos::where('psse_receta_id', $receta->rec_id)->delete();

            if ($request->subsegmentos != null && is_array($request->subsegmentos)) {
                foreach ($request->subsegmentos as $sse) {
                    PivoteSubSegmentos::create([
                        "psse_subsegmento_id" => intval($sse),
                        "psse_receta_id" =>  intval($receta->rec_id)
                    ]);
                }
            }

            RecetaSegmento::where('recseg_receta_id', $receta->rec_id)->delete();
            if ($request->segmentos != null && is_array($request->segmentos)) {
                foreach ($request->segmentos as $seg) {
                    RecetaSegmento::create([
                        "recseg_segmento_id" => intval($seg),
                        "recseg_receta_id" =>  intval($receta->rec_id)
                    ]);
                }
            }

            RecetaProducto::where('prorec_receta_id', $receta->rec_id)->delete();
            if ($request->productos != null && is_array($request->productos)) {
                foreach ($request->productos as $pro) {
                    RecetaProducto::create([
                        "prorec_producto_id" => intval($pro),
                        "prorec_receta_id" =>  intval($receta->rec_id)
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

    public static function eliminar($noticia)
    {

        try {
            $imagenes = ImagenNoticia::where('ino_noticia_id', $noticia->not_id)->get();

            foreach ($imagenes as $imagen) {
                FileService::destroy($imagen->ino_imagen);
                $imagen->delete();
            }
            $noticia->delete();

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
