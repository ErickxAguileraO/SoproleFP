<?php

namespace App\Http\Services\Management;

use App\Models\Comuna;
use App\Models\Local;
use App\Models\SubSegmento;
use Illuminate\Support\Facades\DB;

class LocalService
{
    public static function guardar($request)
    {
        DB::beginTransaction();
        
        try {
            Local::create([
                'loc_nombre' => $request->nombre,
                'loc_comuna_id' => $request->comuna,
                'loc_estado' => $request->estado,
                'loc_orden' => $request->orden,
                'loc_direccion' => $request->direccion,
                'loc_contacto' => $request->contacto,
                'loc_telefono' => $request->telefono,
                'loc_horario' => $request->horario,
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

            $loc = Local::find($request->local_id);
            $loc->loc_nombre = $request->nombre;
            $loc->loc_orden = $request->orden;
            $loc->loc_estado = $request->estado;
            $loc->loc_comuna_id = $request->comuna;
            $loc->loc_direccion = $request->direccion;
            $loc->loc_contacto = $request->contacto;
            $loc->loc_telefono =$request->telefono;
            $loc->loc_horario = $request->horario;


    
            $loc->save();

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

    public static function getComunas($region){

        $comunas = Comuna::where('com_region_id',$region)->get();

        $html = '';
        foreach($comunas as $comuna){
            $html.= '<option value="'.$comuna->com_id.'">'.$comuna->com_nombre.'</option>';
        }
        return response()->json([
            'status' => 'T',
            'html' => $html,
        ], 200);
    }
}
