<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Models\Titulo;

class TituloController extends Controller
{
    public function index()
    {
        return view('management.titulo.editar',[
            'result' => Titulo::first()
        ]);
    }

    public function update(Request $request)
    {
        $reglasValidacion = [
            'titulo_uno_home' =>  ['required' ],
            'titulo_dos_home' =>  ['required' ],
            'titulo_tres_home' =>  ['required' ],
            'titulo_cuatro_home' =>  ['required' ],
            'titulo_cinco_home' =>  ['required' ],
            'titulo_seis_home' =>  ['required' ],
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

                $registroExistente = Titulo::first();

            if ($registroExistente) {
                // Actualizar el registro existente
                $registroExistente->titulo = $request->titulo_uno_home;
                $registroExistente->descripcion = $request->descripcion_uno_home;
                $registroExistente->tit_titulo_dos_home = $request->titulo_dos_home;
                $registroExistente->tit_descripcion_dos_home = $request->descripcion_dos_home;
                $registroExistente->tit_titulo_tres_home = $request->titulo_tres_home;
                $registroExistente->tit_descripcion_tres_home = $request->descripcion_tres_home;
                $registroExistente->tit_titulo_cuatro_home = $request->titulo_cuatro_home;
                $registroExistente->tit_descripcion_cuatro_home = $request->descripcion_cuatro_home;
                $registroExistente->tit_titulo_cinco_home = $request->titulo_cinco_home;
                $registroExistente->tit_descripcion_cinco_home = $request->descripcion_cinco_home;
                $registroExistente->tit_titulo_seis_home = $request->titulo_seis_home;
                $registroExistente->tit_descripcion_seis_home = $request->descripcion_seis_home;

                $registroExistente->tit_titulo_uno_mini_sitio = $request->titulo_uno_mini_sitio;
                $registroExistente->tit_descripcion_uno_mini_sitio = $request->descripcion_uno_mini_sitio;
                $registroExistente->tit_titulo_dos_mini_sitio = $request->titulo_dos_mini_sitio;
                $registroExistente->tit_descripcion_dos_mini_sitio = $request->descripcion_dos_mini_sitio;
                $registroExistente->tit_titulo_tres_mini_sitio = $request->titulo_tres_mini_sitio;
                $registroExistente->tit_descripcion_tres_mini_sitio = $request->descripcion_tres_mini_sitio;
                $registroExistente->tit_titulo_cuatro_mini_sitio = $request->titulo_cuatro_mini_sitio;
                $registroExistente->tit_descripcion_cuatro_mini_sitio = $request->descripcion_cuatro_mini_sitio;
                $registroExistente->tit_titulo_cinco_mini_sitio = $request->titulo_cinco_mini_sitio;
                $registroExistente->tit_descripcion_cinco_mini_sitio = $request->descripcion_cinco_mini_sitio;
                $registroExistente->tit_titulo_seis_mini_sitio = $request->titulo_seis_mini_sitio;
                $registroExistente->tit_descripcion_seis_mini_sitio = $request->descripcion_seis_mini_sitio;
                $registroExistente->save();
            } else {
                // No hay registros, crear uno nuevo
                $nuevoRegistro = new Titulo();
                $nuevoRegistro->titulo = $request->titulo_uno_home;
                $nuevoRegistro->descripcion = $request->descripcion_uno_home;
                $nuevoRegistro->tit_titulo_dos_home = $request->titulo_dos_home;
                $nuevoRegistro->tit_descripcion_dos_home = $request->descripcion_dos_home;
                $nuevoRegistro->tit_titulo_tres_home = $request->titulo_tres_home;
                $nuevoRegistro->tit_descripcion_tres_home = $request->descripcion_tres_home;
                $nuevoRegistro->tit_titulo_cuatro_home = $request->titulo_cuatro_home;
                $nuevoRegistro->tit_descripcion_cuatro_home = $request->descripcion_cuatro_home;
                $nuevoRegistro->tit_titulo_cinco_home = $request->titulo_cinco_home;
                $nuevoRegistro->tit_descripcion_cinco_home = $request->descripcion_cinco_home;
                $nuevoRegistro->tit_titulo_seis_home = $request->titulo_seis_home;
                $nuevoRegistro->tit_descripcion_seis_home = $request->descripcion_seis_home;

                $nuevoRegistro->tit_titulo_uno_mini_sitio = $request->titulo_uno_mini_sitio;
                $nuevoRegistro->tit_descripcion_uno_mini_sitio = $request->descripcion_uno_mini_sitio;
                $nuevoRegistro->tit_titulo_dos_mini_sitio = $request->titulo_dos_mini_sitio;
                $nuevoRegistro->tit_descripcion_dos_mini_sitio = $request->descripcion_dos_mini_sitio;
                $nuevoRegistro->tit_titulo_tres_mini_sitio = $request->titulo_tres_mini_sitio;
                $nuevoRegistro->tit_descripcion_tres_mini_sitio = $request->descripcion_tres_mini_sitio;
                $nuevoRegistro->tit_titulo_cuatro_mini_sitio = $request->titulo_cuatro_mini_sitio;
                $nuevoRegistro->tit_descripcion_cuatro_mini_sitio = $request->descripcion_cuatro_mini_sitio;
                $nuevoRegistro->tit_titulo_cinco_mini_sitio = $request->titulo_cinco_mini_sitio;
                $nuevoRegistro->tit_descripcion_cinco_mini_sitio = $request->descripcion_cinco_mini_sitio;
                $nuevoRegistro->tit_titulo_seis_mini_sitio = $request->titulo_seis_mini_sitio;
                $nuevoRegistro->tit_descripcion_seis_mini_sitio = $request->descripcion_seis_mini_sitio;
                $nuevoRegistro->save();
            }
                // $form = Titulo::find(1);
                // $form->titulo = $request->titulo_uno_home;
                // $form->descripcion = $request->descripcion_uno_home;
                // $form->tit_titulo_dos_home = $request->titulo_dos_home;
                // $form->tit_descripcion_dos_home = $request->descripcion_dos_home;
                // $form->tit_titulo_tres_home = $request->titulo_tres_home;
                // $form->tit_descripcion_tres_home = $request->descripcion_tres_home;
                // $form->tit_titulo_cuatro_home = $request->titulo_cuatro_home;
                // $form->tit_descripcion_cuatro_home = $request->descripcion_cuatro_home;
                // $form->tit_titulo_cinco_home = $request->titulo_cinco_home;
                // $form->tit_descripcion_cinco_home = $request->descripcion_cinco_home;
                // $form->tit_titulo_seis_home = $request->titulo_seis_home;
                // $form->tit_descripcion_seis_home = $request->descripcion_seis_home;

                // $form->tit_titulo_uno_mini_sitio = $request->titulo_uno_mini_sitio;
                // $form->tit_descripcion_uno_mini_sitio = $request->descripcion_uno_mini_sitio;
                // $form->tit_titulo_dos_mini_sitio = $request->titulo_dos_mini_sitio;
                // $form->tit_descripcion_dos_mini_sitio = $request->descripcion_dos_mini_sitio;
                // $form->tit_titulo_tres_mini_sitio = $request->titulo_tres_mini_sitio;
                // $form->tit_descripcion_tres_mini_sitio = $request->descripcion_tres_mini_sitio;
                // $form->tit_titulo_cuatro_mini_sitio = $request->titulo_cuatro_mini_sitio;
                // $form->tit_descripcion_cuatro_mini_sitio = $request->descripcion_cuatro_mini_sitio;
                // $form->tit_titulo_cinco_mini_sitio = $request->titulo_cinco_mini_sitio;
                // $form->tit_descripcion_cinco_mini_sitio = $request->descripcion_cinco_mini_sitio;
                // $form->tit_titulo_seis_mini_sitio = $request->titulo_seis_mini_sitio;
                // $form->tit_descripcion_seis_mini_sitio = $request->descripcion_seis_mini_sitio;
                // $form->save();

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
