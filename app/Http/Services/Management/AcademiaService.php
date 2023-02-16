<?php

namespace App\Http\Services\Management;

use App\Models\Academia;
use App\Models\AcademiaSegmento;
use App\Models\PivoteSubSegmentos;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AcademiaService
{
    public static function guardar($request)
    {
        DB::beginTransaction();
 
            $insert = [
                'aca_titulo' => $request->titulo,
                'aca_url' => Str::slug($request->titulo),
                'aca_titulo2' => $request->titulo2,
                'aca_contenido' => $request->contenido,
                'aca_video' => $request->video,
                'aca_orden' => $request->orden,
                'aca_estado' =>$request->estado,
            ];

            $uploadFile = FileService::upload($request->file('imagen'),'imagenes/academia');
            if($uploadFile){
                $insert['aca_imagen'] = $uploadFile;
            }
            $academia =  Academia::create($insert);



            if($request->subsegmentos != null && is_array($request->subsegmentos)){
                foreach($request->subsegmentos as $sse){
                    PivoteSubSegmentos::create([
                        "psse_subsegmento_id" => intval($sse),
                        "psse_academia_id" =>  intval($academia->aca_id)
                    ]);
                }
            }

            if($request->segmentos != null && is_array($request->segmentos)){
                foreach($request->segmentos as $seg){
                    AcademiaSegmento::create([
                        "acaseg_segmento_id" => intval($seg),
                        "acaseg_academia_id" =>  intval($academia->aca_id)
                    ]);
                }
            }

            DB::commit();

            return response()->json([
                'status' => 'T',
                'message' => 'Registro creado correctamente',
            ], 201);
       
    }

    public static function editar($request)
    {
        DB::beginTransaction();

        try {
        
            $academia = Academia::find($request->academia_id);
            $academia->aca_titulo =  $request->titulo;
            $academia->aca_url =  Str::slug($request->titulo);
            $academia->aca_titulo2 =  $request->titulo2;
            $academia->aca_contenido = $request->contenido;
            $academia->aca_video = $request->video;
            $academia->aca_orden =  $request->orden;
            $academia->aca_estado = $request->estado;

            if($request->file('imagen')){
                $academia->aca_imagen = FileService::upload($request->file('imagen'),'imagenes/academia');
            }


            $academia->save();

            PivoteSubSegmentos::where('psse_academia_id',$academia->aca_id)->delete();
            if($request->subsegmentos != null && is_array($request->subsegmentos)){
                foreach($request->subsegmentos as $sse){
                    PivoteSubSegmentos::create([
                        "psse_subsegmento_id" => intval($sse),
                        "psse_academia_id" =>  intval($academia->aca_id)
                    ]);
                }
            }

            AcademiaSegmento::where('acaseg_academia_id', $academia->aca_id)->delete();
            if($request->segmentos != null && is_array($request->segmentos)){
                foreach($request->segmentos as $seg){
                    AcademiaSegmento::create([
                        "acaseg_segmento_id" => intval($seg),
                        "acaseg_academia_id" =>  intval($academia->aca_id)
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

    public static function eliminar($academia)
    {

        try {

            PivoteSubSegmentos::where('psse_academia_id',$academia->aca_id)->delete();
            AcademiaSegmento::where('acaseg_academia_id', $academia->aca_id)->delete();

            $academia->delete();

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
