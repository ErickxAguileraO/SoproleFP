<?php

namespace App\Http\Services\Management;

use App\Models\Cliente;
use Illuminate\Support\Facades\DB;

class ClienteService
{
    public static function guardar($request)
    {
        DB::beginTransaction();

        try {
            Cliente::create([
                'cli_razon_social' => $request->razon_social,
                'cli_rut' => $request->rut,
                'cli_otro_tipo' => $request->otro_tipo,
                'cli_direccion_calle' => $request->calle,
                'cli_direccion_numero' => $request->numero,
                'cli_nombre_contacto' => $request->nombre_contacto,
                'cli_telefono_contacto' => $request->telefono_contacto,
                'cli_correo_contacto' => $request->correo_contacto,
                'cli_estado' => $request->estado,
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

            $cli = Cliente::find($request->cliente_id);
            $cli->cli_razon_social = $request->razon_social;
            $cli->cli_rut =  $request->rut;
            $cli->cli_otro_tipo = $request->otro_tipo;
            $cli->cli_direccion_calle = $request->calle;
            $cli->cli_direccion_numero =  $request->numero;
            $cli->cli_nombre_contacto =  $request->nombre_contacto;
            $cli->cli_telefono_contacto =  $request->telefono_contacto;
            $cli->cli_correo_contacto =  $request->correo_contacto;
            $cli->cli_estado =  $request->estado;
            $cli->save();

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
