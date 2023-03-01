<?php

namespace App\Http\Services\Management;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserService
{

    public static function guardar($request)
    {
        DB::beginTransaction();

        try {
            User::create([
                'name' => $request->nombre,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);

            DB::commit();

            return response()->json([
                'status' => 'T',
                'message' => 'Se ha registrado el usuario correctamente.',
            ], 201);
        } catch (\Exception $exc) {
            return response()->json([
                'status' => 'F',
                'message' => 'Ha ocurrido un error inesperado. Inténtelo más tarde.',
            ], 500);
        }
    }

    public static function editar($request, $id){

        DB::beginTransaction();

        try {
            $usuario = User::where('id', $id)->first();
            $usuario->name = $request->nombre;
            $usuario->email = $request->email;
            $usuario->save();

            DB::commit();

            return response()->json([
                'status' => 'T',
                'message' => 'El usuario se ha actualizado correctamente.',
            ], 200);
        } catch (\Exception $exc) {
            DB::rollback();

            return response()->json([
                'status' => 'F',
                'message' => 'Ha ocurrido un error inesperado. Inténtelo más tarde.'
            ], 500);
        }
    }



    public static function editarMiCuenta($request, $id){

        DB::beginTransaction();

        try {
            $usuario = User::where('id', $id)->first();
            $usuario->name = $request->nombre;
            $usuario->email = $request->email;
            $usuario->password = Hash::make($request->password);
            $usuario->save();

            DB::commit();

            return response()->json([
                'status' => 'T',
                'message' => 'El usuario se ha actualizado correctamente.',
            ], 200);
        } catch (\Exception $exc) {
            DB::rollback();

            return response()->json([
                'status' => 'F',
                'message' => 'Ha ocurrido un error inesperado. Inténtelo más tarde.'
            ], 500);
        }
    }
}
