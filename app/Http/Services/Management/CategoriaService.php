<?php

namespace App\Http\Services\Management;

use App\Models\Categoria;
use Illuminate\Support\Facades\DB;

class CategoriaService
{
    public static function guardar($request)
    {
        DB::beginTransaction();

        try {
            Categoria::create([
                'cat_nombre' => $request->nombre,
                'cat_estado' => $request->estado,
                'cat_orden' => $request->orden,
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

            $categoria = Categoria::find($request->categoria_id);
            $categoria->cat_nombre = $request->nombre;
            $categoria->cat_orden = $request->orden;
            $categoria->cat_estado = $request->estado;
    
            $categoria->save();

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
