<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;

use App\Models\FormularioContacto;


class FormulariosController extends Controller
{
    public function index($tipo)
    { 
        $form = FormularioContacto::find(1);
        $urlIframe = '';
        $alto = 1000;
        $titulo = 'Formulario de contacto';

        switch($tipo){
            case 'contacto':
                $urlIframe = $form->forcon_formulario_contacto;
                $alto = 2500;
                $titulo = 'Formulario de contacto';
            break;
            case 'aceptar':
                $urlIframe = $form->forcon_formulario_aceptar;
                $alto = 2000;
                $titulo = 'Formulario aceptar';
            break;
            case 'rechazar':
                $urlIframe = $form->forcon_formulario_rechazar;
                $alto = 1400;
                $titulo = 'Formulario de rechazo';
            break;
        }

        if($urlIframe){
            return view('web.formularios.index',[
                'url' => $urlIframe,
                'alto' => $alto,
                'titulo' => $titulo
            ]);
        }else{
            return redirect('/');
        }  
    }
}
