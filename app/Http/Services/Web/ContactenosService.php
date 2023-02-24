<?php

namespace App\Http\Services\Web;


use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

use App\Models\Contacto;
use App\Mail\ContactoContactenos;

class ContactenosService
{
    public static function guardar($request)
    {

        DB::beginTransaction();
        try {

            $contacto = Contacto::create([
                'con_telefono' => $request->telefono,
                'con_email' => $request->correo,
                'con_consulta' => strip_tags($request->consulta),
            ]);
            self::sendMail($contacto);
            
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

    private static function sendMail($datos)
    {
        Mail::to(env('MAIL_CONTACTENOS'))->send(new ContactoContactenos([
            'datos' =>  $datos,
        ]));
    }

}
