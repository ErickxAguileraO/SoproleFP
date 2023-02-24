<?php

namespace App\Http\Services\Web;

use App\Models\Contacto;
use Illuminate\Support\Facades\DB;


class ContactenosService
{
    public static function guardar($request)
    {

        DB::beginTransaction();
        try {

            Contacto::create([
                'con_telefono' => $request->telefono,
                'con_email' => $request->correo,
                'con_consulta' => strip_tags($request->consulta),
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
}
