<?php

namespace App\Http\Services\Management;

use App\Models\Alianza;
use App\Models\Slider;
use Illuminate\Support\Facades\DB;

class AlianzaService
{
    public static function guardar($request)
    {
        DB::beginTransaction();

        try {

            $insert = [
                'ali_nombre' => $request->nombre,
                'ali_editable_id' => $request->pagina_editable,
            ];
            
            $uploadFile = FileService::upload($request->file('imagen'),'imagenes/alianza');

            if($uploadFile){
                $insert['ali_imagen'] = $uploadFile;
            }

            Alianza::create($insert);

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

            $alianza = Alianza::find($request->alianza_id);
            $alianza->ali_nombre = $request->nombre;
            $alianza->ali_editable_id = $request->pagina_editable;

            if($request->file('imagen')){
                $alianza->ali_imagen = FileService::upload($request->file('imagen'),'imagenes/alianza');
            }

            $alianza->save();

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
}
