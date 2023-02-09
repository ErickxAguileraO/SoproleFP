<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ImageUploadController extends Controller
{
    public function storeImage(Request $request)
    {
        if ($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = Str::uuid(). '.' . $extension;
            $request->file('upload')->move(public_path('media'), $fileName);

            return response()->json(['fileName' => $fileName, 'uploaded'=> 1, 'url' => '/public/media/'.$fileName]);
        }
    }
}
