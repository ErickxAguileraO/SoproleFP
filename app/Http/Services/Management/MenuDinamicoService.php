<?php

namespace App\Http\Services\Management;

use App\Models\MenuDinamico;
use Illuminate\Support\Facades\DB;

class MenuDinamicoService
{

    public static function editar($request)
    {
        DB::beginTransaction();

        try {

            $menu = MenuDinamico::find($request->menu_id);
            $menu->mdi_nombre = $request->nombre;
            $menu->mdi_orden = $request->orden;
            $menu->mdi_estado = $request->estado;

            $menu->save();

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
