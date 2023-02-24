<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Editable;
use Illuminate\Support\Facades\Request;

class EditablesController extends Controller
{
    public function index()
    {
        switch (Request::segment(1)) {
            case 'politicas-de-privacidad':
                $tipo = 2;
                break;

            case 'terminos-condiciones':
                $tipo = 3;
                break;
            case 'informacion-consumidor':
                $tipo = 4;
                break;
            default:
                $tipo = 0;
                break;
        }

        return view('web.editables.index',[
            "editable" => Editable::where('edi_tipo',$tipo)->where('edi_estado',1)->firstOrFail()
        ]);
    }
}
