<?php

namespace App\Http\Controllers\Management;

use App\Models\User;
use App\Http\Controllers\Controller;
use App\Http\Services\Management\UserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index()
    {
        return view('management.users.usuarios');
    }

    public function getUsers()
    {
        return User::all();
    }

    public function create()
    {
        return view('management.users.creacion_usuario');
    }

    public function edit(User $usuario)
    {
        return view('management.users.modificacion_usuario', [
            'usuario' => $usuario
        ]);
    }

    public function store(Request $request)
    {
        $reglasValidacion = [
            'nombre' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email','max:255', 'unique:users,email'],
            'password' => ['required','min:10', 'max:255', 'same:password_confirmation']
        ];

        $validacion = Validator::make($request->all(), $reglasValidacion);

        if ($validacion->fails()) {
            return response()->json([
                'status' => 'F',
                'message' =>  $validacion->errors()->all()
            ], 400);
        } else {
            return UserService::guardar($request);
        }
    }

    public function update(Request $request, $id)
    {
        $reglasValidacion = [
            'nombre' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email','max:255', 'unique:Users,email,'.$id], 
        ];

        $validacion = Validator::make($request->all(), $reglasValidacion);

        if ($validacion->fails()) {
            return response()->json([
                'status' => 'F',
                'message' =>  $validacion->errors()->all()
            ], 400);
        } else {
            return UserService::editar($request, $id);
        }  
    }
}
