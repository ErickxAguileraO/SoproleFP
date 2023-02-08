<?php

namespace App\Http\Responses;

use Laravel\Fortify\Contracts\LoginResponse as FortifyLoginResponse;
use App\Models\User;

class LoginResponse implements FortifyLoginResponse
{
    public function toResponse($request)
    {
        return response()->json([
            'estado_peticion' => 'OK',
            'resultado' => true,
            'mensaje' => 'Bienvenido...',
            'url_redireccion' => route('administracion.index')
        ], 200);
    }
}