<?php

namespace App\Http\Services\Management;

use App\Models\ImagenNoticia;
use App\Models\Noticia;
use App\Models\NoticiaSegmento;
use App\Models\PivoteSubSegmentos;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class NoticiaService
{
    public static function guardar($request)
    {
        DB::beginTransaction();

        try {

            $noticia_slider = NULL;
            if ($request->file('imagen')) {
                $noticia_slider = FileService::upload($request->file('imagen'), 'imagenes/noticias');
            }

            $noticia = Noticia::create([
                'not_titulo' => $request->titulo,
                'not_titulo2' => $request->titulo2,
                'not_contenido' => $request->contenido,
                'not_slider' => $noticia_slider,
                'not_fecha' => Carbon::createFromFormat('Y-m-d', $request->fecha)->toDateString(),
                'not_estado' =>$request->estado,
                // 'not_url' => Str::slug($request->titulo)
                'not_url' => strtolower(str_replace(' ', '-', $request->nombre_url))
            ]);

            if($request->file('imagenes') != null && count($request->file('imagenes'))>0){
                foreach ($request->file('imagenes') as $imagen) {
                    ImagenNoticia::create([
                        "ino_imagen" => FileService::upload($imagen, 'imagenes/noticias'),
                        "ino_noticia_id" => $noticia->not_id
                    ]);
                }
            }

            if ($request->segmentos != null && is_array($request->segmentos)) {
                foreach ($request->segmentos as $seg) {
                    NoticiaSegmento::create([
                        "notseg_segmento_id" => intval($seg),
                        "notseg_noticia_id" =>  intval($noticia->not_id)
                    ]);
                }
            }

            if($request->subsegmentos != null && is_array($request->subsegmentos)){
                foreach($request->subsegmentos as $sse){
                    PivoteSubSegmentos::create([
                        "psse_subsegmento_id" => intval($sse),
                        "psse_noticia_id" =>  intval($noticia->not_id)
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

            $noticia = Noticia::find($request->noticia_id);
            $noticia->not_titulo = $request->titulo;
            $noticia->not_titulo2 = $request->titulo2;
            $noticia->not_contenido = $request->contenido;
            $noticia->not_fecha =Carbon::createFromFormat('Y-m-d',  $request->fecha)->toDateString();
            $noticia->not_estado = $request->estado;
            // $noticia->not_url = Str::slug($request->titulo);
            $noticia->not_url = strtolower(str_replace(' ', '-', $request->nombre_url));

            if ($request->file('imagen')) {
                $noticia->not_slider = FileService::upload($request->file('imagen'), 'imagenes/noticias');
            }

            $noticia->save();

            if($request->file('imagenes') != null && count($request->file('imagenes'))>0){
                foreach ($request->file('imagenes') as $imagen) {
                    ImagenNoticia::create([
                        "ino_imagen" => FileService::upload($imagen, 'imagenes/noticias'),
                        "ino_noticia_id" => $noticia->not_id
                    ]);
                }
            }

            PivoteSubSegmentos::where('psse_noticia_id',$noticia->not_id)->delete();

            if($request->subsegmentos != null && is_array($request->subsegmentos)){
                foreach($request->subsegmentos as $sse){
                    PivoteSubSegmentos::create([
                        "psse_subsegmento_id" => intval($sse),
                        "psse_noticia_id" =>  intval($noticia->not_id)
                    ]);
                }
            }


            NoticiaSegmento::where('notseg_noticia_id', $noticia->not_id)->delete();
            if ($request->segmentos != null && is_array($request->segmentos)) {
                foreach ($request->segmentos as $seg) {
                    NoticiaSegmento::create([
                        "notseg_segmento_id" => intval($seg),
                        "notseg_noticia_id" =>  intval($noticia->not_id)
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
