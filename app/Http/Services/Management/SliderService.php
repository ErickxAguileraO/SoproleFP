<?php

namespace App\Http\Services\Management;

use App\Models\Slider;
use App\Models\SliderSegmento;
use Illuminate\Support\Facades\DB;

class SliderService
{
    public static function guardar($request)
    {
        DB::beginTransaction();

        try {
            $insert = [
                'sli_nombre' => $request->nombre,
                'sli_estado' => $request->estado,
                'sli_orden' => $request->orden,
                'sli_link' => $request->enlace,
            ];

            $uploadFile = FileService::upload($request->file('imagen'),'imagenes/slider');
            $uploadFileMovil = FileService::upload($request->file('imagen_movil'),'imagenes/slider');

            if($uploadFile){
                $insert['sli_imagen'] = $uploadFile;
            }
            if($uploadFileMovil){
                $insert['sli_imagen_movil'] = $uploadFileMovil;
            }


            $slider = Slider::create($insert);

            if ($request->segmentos != null && is_array($request->segmentos)) {
                foreach ($request->segmentos as $seg) {
                    SliderSegmento::create([
                        "sliseg_segmento_id" => intval($seg),
                        "sliseg_slider_id" =>  intval($slider->sli_id)
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

            $slider = Slider::find($request->slider_id);
            $slider->sli_nombre = $request->nombre;
            $slider->sli_estado = $request->estado;
            $slider->sli_orden = $request->orden;
            $slider->sli_link = $request->enlace;

            if($request->file('imagen')){
                $slider->sli_imagen = FileService::upload($request->file('imagen'),'imagenes/slider');
            }

            if($request->file('imagen_movil')){
                $slider->sli_imagen_movil = FileService::upload($request->file('imagen_movil'),'imagenes/slider');
            }

            $slider->save();


            SliderSegmento::where('sliseg_slider_id', $slider->sli_id)->delete();
            if ($request->segmentos != null && is_array($request->segmentos)) {
                foreach ($request->segmentos as $seg) {
                    SliderSegmento::create([
                        "sliseg_segmento_id" => intval($seg),
                        "sliseg_slider_id" =>  intval($slider->sli_id)
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
}
