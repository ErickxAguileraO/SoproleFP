<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Services\Web\HazteClienteService;
use App\Models\Region;
use App\Models\TipoNegocios;
use Illuminate\Http\Request;
use Malahierba\ChileRut\ChileRut;
use Malahierba\ChileRut\Rules\ValidChileanRut;
use Illuminate\Support\Facades\Validator;

class HazteClienteController extends Controller
{
    public function index()
    { 
        return view('web.cliente.index',[
            "regiones" => Region::all(),
            "tiposNegocio" => TipoNegocios::where('tne_estado',1)->get()
        ]);
    }

    public function store(Request $request){

        $reglasValidacion = [
            'razon_social' => ['required', 'string', 'max:200'],
            'rut' => ['required','string','min:12','max:13', new ValidChileanRut(new ChileRut)],
            'tipo_negocio' => ['required','string', 'max:200'],
            'cual' => ['required', 'string', 'max:200'],
            'calle' => ['required', 'string', 'max:200'],
            'numero' => ['required', 'numeric'],
            'region' => ['required' , 'numeric'],
            'comuna' => ['required' , 'numeric'],
            'nombre' => ['required', 'string', 'max:200'],
            'telefono' => ['required', 'numeric'],
            'correo' => ['required', 'email'],
        ];

        $validacion = Validator::make($request->all(), $reglasValidacion);

        if ($validacion->fails()) {
            return response()->json([
                'status' => 'F',
                'errors' => $validacion->errors()->all()
            ], 400);
        } else {
            return HazteClienteService::guardar($request);
        }
    }
}
