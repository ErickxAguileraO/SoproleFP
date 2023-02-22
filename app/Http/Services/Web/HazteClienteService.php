<?php

namespace App\Http\Services\Web;

use App\Models\HazteCliente;

use Illuminate\Support\Facades\DB;

class HazteClienteService
{
    public static function guardar($request)
    {
        
        DB::beginTransaction();
        try {
            HazteCliente::create([
                'fhc_razon_social' => $request->razon_social,
                'fhc_rut' => $request->rut,
                'fhc_tipo' => $request->tipo_negocio,
                'fhc_cual' => $request->cual,
                'fhc_direccion' => $request->calle,
                'fhc_numero' => $request->numero,
                'fhc_comuna_id' => $request->comuna,
                'fhc_nombre' => $request->nombre,
                'fhc_telefono' => $request->telefono,
                'fhc_correo' => $request->correo,
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
