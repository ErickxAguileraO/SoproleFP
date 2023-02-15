<?php

namespace App\Http\Services\Management;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class FileService
{
    public static function upload($imagen, $ruta)
    {
        $name = Str::uuid()->toString() . '.' . $imagen->extension();
        $imagen->storeAs('public/'.$ruta, $name);

        return '/public/storage/' . $ruta. '/' . $name;
    }

    public static function destroy($imagen){
        $imagen = str_replace('/public/storage/', 'public/', $imagen);
        Storage::delete($imagen);
    }

    public static function uploadCustomName($imagen, $ruta)
    {
        $imagen->storeAs('public/'.$ruta, $imagen->getClientOriginalName());
        return '/public/storage/' . $ruta. '/' . $imagen->getClientOriginalName();
    }
}
