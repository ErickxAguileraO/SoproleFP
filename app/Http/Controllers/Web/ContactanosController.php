<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Services\Web\ContactenosService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContactanosController extends Controller
{
    public function index()
    {
        return view('web.contacto.index');
    }

    public function store(Request $request)
    {
        $reglasValidacion = [
            'telefono' => ['required', 'numeric'],
            'correo' => ['required', 'email', 'max:200'],
            'consulta' => ['required', 'max:2000'],
        ];

        $validacion = Validator::make($request->all(), $reglasValidacion);

        if ($validacion->fails()) {
            return response()->json([
                'status' => 'F',
                'errors' => $validacion->errors()->all()
            ], 400);
        } else {
            return ContactenosService::guardar($request);
        }
    }
}
