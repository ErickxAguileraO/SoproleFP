<?php

namespace App\Http\Services\Management;

use App\Models\TipoNegocios;
use Illuminate\Support\Facades\DB;

class TipoNegocioService
{
    public static function guardar($request)
    {
        
        DB::beginTransaction();

        try {
            TipoNegocios::create([
                'tne_nombre' => $request->nombre,
                'tne_estado' => $request->estado,
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

            $tipoNegocio = TipoNegocios::find($request->tipo_negocio_id);
            $tipoNegocio->tne_nombre = $request->nombre;
            $tipoNegocio->tne_estado = $request->estado;
    
            $tipoNegocio->save();

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
