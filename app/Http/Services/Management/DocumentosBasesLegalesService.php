<?php

namespace App\Http\Services\Management;

use App\Models\DocumentosBasesLegales;
use Illuminate\Support\Facades\DB;

class DocumentosBasesLegalesService
{
    public static function guardar($request)
    {
        DB::beginTransaction();

        try {

            DocumentosBasesLegales::create([
                'dbs_nombre' => $request->nombre,
                'dbs_archivo' => FileService::upload($request->file('archivo'), 'archivos/bases_legales'),
                'dbs_orden' => $request->orden,
            ]);

            DB::commit();

            return response()->json([
                'status' => 'T',
                'message' => 'Registro creado correctamente',
                'documentos' => DocumentosBasesLegales::select('dbs_nombre as nombre','dbs_archivo as archivo','dbs_orden as orden','dbs_id as id')->get()
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

            $documento = DocumentosBasesLegales::findOrFail($request->base_id);
            $documento->dbs_nombre = $request->nombre;
            $documento->dbs_orden = $request->orden;
            
            if($request->file('archivo')){
                $documento->dbs_archivo = FileService::upload($request->file('archivo'), 'archivos/bases_legales');
            }
            
            $documento->save();          

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
