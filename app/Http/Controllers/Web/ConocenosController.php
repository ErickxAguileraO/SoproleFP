<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Alianza;
use App\Models\Editable;

class ConocenosController extends Controller
{
    public function show()
    {
        $editable = Editable::where('edi_tipo', 1)->where('edi_estado', 1)->firstOrFail();
        
        return view('web.conocenos.index', [
            "conocenos" => $editable,
            "alianzas" => Alianza::where('ali_estado',1)->where('ali_editable_id',$editable->edi_id)->orderby('ali_orden', 'asc')->get()
        ]);
    }
}
