<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use App\Models\Contacto;

class ContactoController extends Controller
{
    public function index()
    {
        return view('management.contacto.index');
    }
    public function listar()
    {
        return Contacto::all();
    }

    public function editar(Contacto $contacto)
    {
        return view('management.contacto.editar', [
            "contacto" => $contacto
        ]);
    }
}
