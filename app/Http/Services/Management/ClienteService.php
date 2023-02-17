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
            $insert = [
                'clie_nombre' => $request->nombre,
                'clie_editable_id' => $request->editable,
                'clie_estado' => $request->estado,
            ];

            if ($request->file('imagen')) {
                $insert['clie_imagen'] = FileService::upload($request->file('imagen'), 'imagenes/clientes');
            }
            Cliente::create($insert);

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
            $cli->clie_nombre = $request->nombre;
            $cli->clie_estado = $request->estado;
            $cli->clie_editable_id =  $request->editable;

            if ($request->file('imagen')) {
                $cli->clie_imagen = FileService::upload($request->file('imagen'), 'imagenes/clientes');
            }

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
