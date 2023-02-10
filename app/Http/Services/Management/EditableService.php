<?php

namespace App\Http\Services\Management;

use App\Models\Editable;
use App\Models\ImagenEditable;
use Illuminate\Support\Facades\DB;

class EditableService
{
    public static function guardar($request)
    {
        DB::beginTransaction();

        try {
            $editable = Editable::create([
                'edi_titulo' => $request->titulo,
                'edi_contenido' => $request->contenido,
                'edi_video' => $request->video,
                'edi_tipo' => $request->tipo,
                'edi_estado' => $request->estado,
                
            ]);

            if($request->file('imagenes') != null && count($request->file('imagenes'))>0){
                foreach($request->file('imagenes') as $imagen){
                    ImagenEditable::create([
                        "ied_imagen" => FileService::upload($imagen,'imagenes/editables'),
                        "ied_editable_id" => $editable->edi_id
                    ]);
                }
            }
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

            $editable = Editable::find($request->editable_id);
            $editable->edi_titulo = $request->titulo;
            $editable->edi_contenido = $request->contenido;
            $editable->edi_video = $request->video;
            $editable->edi_tipo = $request->tipo;
            $editable->edi_estado = $request->estado;

            if($request->file('imagenes') != null && count($request->file('imagenes'))>0){
                foreach($request->file('imagenes') as $imagen){
                    ImagenEditable::create([
                        "ied_imagen" => FileService::upload($imagen,'imagenes/editables'),
                        "ied_editable_id" => $request->editable_id
                    ]);
                }
            }

            $editable->save();
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

    public static function eliminar($editable){

        try {
            $imagenes = ImagenEditable::where('ied_editable_id', $editable->edi_id)->get();
        
            foreach($imagenes as $imagen){
                FileService::destroy($imagen->ied_imagen);
                $imagen->delete();
            }
            $editable->delete();

            return response()->json([
                'status' => 'T',
                'message' => 'Registro eliminado correctamente',
            ], 201);

        } catch (\Exception $exc) {
            return response()->json([
                'status' => 'F',
                'message' => 'Ha ocurrido un error inesperado. Inténtelo más tarde.',
            ], 500);
        }
    }

    public static function eliminarImagen($imagen){
        
        try {
            FileService::destroy($imagen->ied_imagen);
            $imagen->delete();

            return response()->json([
                'status' => 'T',
                'message' => 'Registro eliminado correctamente',
            ], 201);

        } catch (\Exception $exc) {
            return response()->json([
                'status' => 'F',
                'message' => 'Ha ocurrido un error inesperado. Inténtelo más tarde.',
            ], 500);
        }
    }


}
