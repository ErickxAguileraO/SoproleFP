<?php

namespace App\Http\Services\Management;

use App\Models\Segmento;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

use App\Models\PivoteSubSegmentos;

class SegmentoService
{
    public static function guardar($request)
    {
        DB::beginTransaction();

        try {
            $insert = [
                'seg_nombre' => $request->nombre,
                'seg_url' => Str::slug($request->nombre),
                'seg_estado' => $request->estado,
                'seg_orden' => $request->orden,
                'seg_color' => $request->color,
                'seg_color_texto' => $request->color_texto,
                'seg_color_anterior' => $request->color,
            ];
            $uploadFile = FileService::upload($request->file('imagen'),'imagenes/segmento');

            if($uploadFile){
                $insert['seg_imagen'] = $uploadFile;
            }

            $segmento = Segmento::create($insert);

            if($request->subsegmentos != null && is_array($request->subsegmentos)){
                foreach($request->subsegmentos as $sse){
                    PivoteSubSegmentos::create([
                        "psse_subsegmento_id" => intval($sse),
                        "psse_segmento_id" =>  intval($segmento->seg_id)
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

            $segmento = Segmento::find($request->segmento_id);

            $segmento->seg_nombre = $request->nombre;
            $segmento->seg_url =Str::slug($request->nombre);
            $segmento->seg_estado = $request->estado;
            $segmento->seg_orden = $request->orden;
            $segmento->seg_color_anterior = $segmento->seg_color;
            $segmento->seg_color = $request->color;
            $segmento->seg_color_texto = $request->color_texto;

            if($request->file('imagen')){
                $segmento->seg_imagen = FileService::upload($request->file('imagen'),'imagenes/segmento');
            }

            PivoteSubSegmentos::where('psse_segmento_id',$segmento->seg_id)->delete();

            if($request->subsegmentos != null && is_array($request->subsegmentos)){
                foreach($request->subsegmentos as $sse){
                    PivoteSubSegmentos::create([
                        "psse_subsegmento_id" => intval($sse),
                        "psse_segmento_id" =>  intval($segmento->seg_id)
                    ]);
                }
            }



            $segmento->save();

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
}
