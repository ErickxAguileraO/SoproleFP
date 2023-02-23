<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use App\Models\HazteCliente;

class HazteClienteController extends Controller
{
    public function index()
    {
        return view('management.haztecliente.index');
    }
    public function listar()
    {
        
        return HazteCliente::all();
    }

    public function editar(HazteCliente $cliente)
    {
        return view('management.haztecliente.editar', [
            "cliente" => $cliente
        ]);
    }
}
