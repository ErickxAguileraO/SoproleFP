<?php

namespace App\Http\Services\Management;

use App\Models\Configuracion;
use Illuminate\Support\Facades\DB;

class ConfiguracionService
{
    public static function guardar($request)
    {
        DB::beginTransaction();
        
        try {
            $insert = [
                'con_contenido' => $request->contenido,
                'con_link' => $request->link,
                'con_tipo' => $request->tipo,
            ];

            if($request->file('imagen')){
                $insert['con_imagen'] = FileService::upload($request->file('imagen'),'imagenes/configuracion');
            }

            Configuracion::create($insert);

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

            $conf = Configuracion::find($request->configuracion_id);
            $conf->con_contenido = $request->contenido;
            $conf->con_link = $request->link;
            $conf->con_tipo = $request->tipo;

            if($request->file('imagen')){
                $conf->con_imagen = FileService::upload($request->file('imagen'),'imagenes/configuracion');
            }

            $conf->save();

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
