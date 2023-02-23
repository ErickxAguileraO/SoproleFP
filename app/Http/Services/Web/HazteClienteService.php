<?php

namespace App\Http\Services\Web;

use App\Models\HazteCliente;
use App\Models\Local;
use App\Mail\ContactoHazteCliente;
use App\Models\Comuna;
use App\Models\TipoNegocios;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class HazteClienteService
{
    public static function guardar($request)
    {

        DB::beginTransaction();
        try {

            $cliente = HazteCliente::create([
                'fhc_razon_social' => $request->razon_social,
                'fhc_rut' => $request->rut,
                'fhc_tipo' => $request->tipo_negocio,
                'fhc_cual' => $request->cual,
                'fhc_direccion' => $request->calle,
                'fhc_numero' => $request->numero,
                'fhc_comuna_id' => $request->comuna,
                'fhc_nombre' => $request->nombre,
                'fhc_telefono' => $request->telefono,
                'fhc_correo' => $request->correo,
            ]);
            //self::sendMail($cliente);

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
        $comuna = Comuna::find($datos->fhc_comuna_id);

        Mail::to(env('MAIL_HAZTE_CLIENTE'))->send(new ContactoHazteCliente([
            'datos' =>  $datos,
            'tipo' => TipoNegocios::find($datos->fhc_tipo)->tne_nombre,
            'comuna' => $comuna->com_nombre,
            'region'  => $comuna->Region->reg_nombre,
        ]));
    }



    public static function listarLocales($region, $comuna)
    {

        if ($region == 0 && $comuna == 0) {
            return response()->json([
                'status' => 'T',
                'html' => view(
                    'web.cliente.locales',
                    [
                        'result' => Local::where('loc_estado', 1)->orderBy('loc_orden', 'ASC')->get(),
                    ]
                )->render()
            ], 201);
        }

        if ($region != 0 && $comuna == 0) {
            return response()->json([
                'status' => 'T',
                'html' => view(
                    'web.cliente.locales',
                    [
                        'result' => Local::join('comuna',"com_id","=","loc_comuna_id")->where('com_region_id',$region)->where('loc_estado', 1)->orderBy('loc_orden', 'ASC')->groupBy('loc_id')->get(),
                    ]
                )->render()
            ], 201);
        }

        if ($region != 0 && $comuna != 0) {
            return response()->json([
                'status' => 'T',
                'html' => view(
                    'web.cliente.locales',
                    [
                        'result' => Local::where('loc_estado', 1)->where('loc_comuna_id', $comuna)->orderBy('loc_orden', 'ASC')->get(),
                    ]
                )->render()
            ], 201);
        }
    }
}
