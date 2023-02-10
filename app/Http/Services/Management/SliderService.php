<?php

namespace App\Http\Services\Management;

use App\Models\Slider;
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
            ];
            $uploadFile = FileService::upload($request->file('imagen'),'imagenes/slider');

            if($uploadFile){
                $insert['sli_imagen'] = $uploadFile;
            }

            Slider::create($insert);

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

            if($request->file('imagen')){
                $slider->sli_imagen = FileService::upload($request->file('imagen'),'imagenes/slider');
            }

            $slider->save();

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
