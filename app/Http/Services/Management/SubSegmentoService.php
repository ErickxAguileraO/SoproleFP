<?php

namespace App\Http\Services\Management;

use App\Models\SubSegmento;
use App\Models\TipoNegocios;
use Illuminate\Support\Facades\DB;

class SubSegmentoService
{
    public static function guardar($request)
    {
        DB::beginTransaction();

        try {
            SubSegmento::create([
                'sse_nombre' => $request->nombre,
                'sse_estado' => $request->estado,
                'sse_orden' => $request->orden,
            ]);

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

            $sse = SubSegmento::find($request->subsegmento_id);
            $sse->sse_nombre = $request->nombre;
            $sse->sse_orden = $request->orden;
            $sse->sse_estado = $request->estado;
    
            $sse->save();

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
