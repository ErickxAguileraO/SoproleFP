<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Models\Metadatos;

class MetaController extends Controller
{
    public function index()
    {
        return view('management.metadatos.editar',[
            'result' => Metadatos::first()
        ]);
    }

    public function update(Request $request)
    {
        $reglasValidacion = [
            // 'titulo_uno_home' =>  ['required' ],
            // 'titulo_dos_home' =>  ['required' ],
            // 'titulo_tres_home' =>  ['required' ],
            // 'titulo_cuatro_home' =>  ['required' ],
            // 'titulo_cinco_home' =>  ['required' ],
            // 'titulo_seis_home' =>  ['required' ],
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

            try {

                $registroExistente = Metadatos::first();

            if ($registroExistente) {
                // Actualizar el registro existente
                $registroExistente->met_titulo = $request->meta_titulo;
                $registroExistente->met_descripcion = $request->meta_descripcion;
                $registroExistente->met_key = $request->meta_key;
                $registroExistente->met_codigo_analytics = $request->meta_analytics;
                $registroExistente->save();
            } else {
                // No hay registros, crear uno nuevo
                $nuevoRegistro = new Metadatos();
                $registroExistente->met_titulo = $request->meta_titulo;
                $registroExistente->met_descripcion = $request->meta_descripcion;
                $registroExistente->met_key = $request->meta_key;
                $registroExistente->met_codigo_analytics = $request->meta_analytics;
                $nuevoRegistro->save();
            }

                return response()->json([
                    'status' => 'T',
                    'message' => 'Registro actualizado correctamente',
                ], 201);

            } catch (\Exception $exc) {
                DB::rollBack();
                return response()->json([
                    'status' => 'F',
                    'message' => 'Ha ocurrido un error inesperado. Inténtelo más tarde.',
                ], 500);
            }
        }
    }
}
