<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Models\FormularioContacto;

class FormularioContactoController extends Controller
{
    public function index()
    {
        return view('management.formularioContacto.editar',[
            'result' => FormularioContacto::find(1)
        ]);
    }

    public function update(Request $request)
    {
        $reglasValidacion = [
            'titulo' =>  ['required','max:6000' ],
            'contenido' =>  ['required','max:6000' ],
            'formulario_contacto' => ['required', 'max:250','url'],
            'formulario_aceptar' => ['required', 'max:250','url'],
            'formulario_rechazo' => ['required', 'max:250','url']
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
                $form = FormularioContacto::find(1);
                $form->forcon_titulo = $request->titulo;
                $form->forcon_contenido = $request->contenido;
                $form->forcon_formulario_contacto = $request->formulario_contacto;
                $form->forcon_formulario_aceptar = $request->formulario_aceptar;
                $form->forcon_formulario_rechazar = $request->formulario_rechazo;
                $form->save();

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
