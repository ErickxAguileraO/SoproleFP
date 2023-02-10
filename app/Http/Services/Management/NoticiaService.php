<?php

namespace App\Http\Services\Management;

use App\Models\ImagenNoticia;
use App\Models\Noticia;
use Illuminate\Support\Facades\DB;

class NoticiaService
{
    public static function guardar($request)
    {
        DB::beginTransaction();

        try {

            $noticia = Noticia::create([
                'not_titulo' => $request->titulo,
                'not_titulo2' => $request->titulo2,
                'not_contenido' => $request->contenido,
            ]);

            if($request->file('imagenes') != null && count($request->file('imagenes'))>0){
                foreach ($request->file('imagenes') as $imagen) {
                    ImagenNoticia::create([
                        "ino_imagen" => FileService::upload($imagen, 'imagenes/noticias'),
                        "ino_noticia_id" => $noticia->not_id
                    ]);
                }
            }
            DB::commit();

            return response()->json([
                'status' => 'T',
                'message' => 'Registro creado correctamente',
            ], 201);
        } catch (\Exception $exc) {
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

            $noticia = Noticia::find($request->noticia_id);
            $noticia->not_titulo = $request->titulo;
            $noticia->not_titulo2 = $request->contenido;
            $noticia->not_contenido = $request->video;
            $noticia->save();

            if($request->file('imagenes') != null && count($request->file('imagenes'))>0){
                foreach ($request->file('imagenes') as $imagen) {
                    ImagenNoticia::create([
                        "ino_imagen" => FileService::upload($imagen, 'imagenes/noticias'),
                        "ino_noticia_id" => $noticia->not_id
                    ]);
                }
            }

            DB::commit();

            return response()->json([
                'status' => 'T',
                'message' => 'Registro actualizado correctamente',
            ], 201);
        } catch (\Exception $exc) {
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
