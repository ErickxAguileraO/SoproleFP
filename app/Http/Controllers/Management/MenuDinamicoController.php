<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\MenuDinamico;
use Illuminate\Support\Facades\Validator;
use App\Http\Services\Management\MenuDinamicoService;

class MenuDinamicoController extends Controller
{
    public function index()
    {
        return view('management.menu_dinamico.index');
    }

    public function listar()
    {
        return MenuDinamico::all();
    }

    public function editar(MenuDinamico $menu)
    {
        return view('management.menu_dinamico.editar', [
            "menu" => $menu
        ]);
    }

    public function update(Request $request)
    {
        $reglasValidacion = [
            'menu_id' => ['required', 'exists:menu_dinamico,mdi_id'],
            'nombre' => ['required', 'string', 'max:250'],
            'estado' => ['required'],
            'orden' => ['required', 'numeric'],
        ];

        $validacion = Validator::make($request->all(), $reglasValidacion);

        if ($validacion->fails()) {
            $layoutError = '';
            foreach ($validacion->errors()->all() as $error) {
                $layoutError .= $error . '<br/>';
            }
            return response()->json([
                'status' => 'F',
                'message' => $layoutError
            ], 400);
        } else {
            return MenuDinamicoService::editar($request);
        }
    }
}
