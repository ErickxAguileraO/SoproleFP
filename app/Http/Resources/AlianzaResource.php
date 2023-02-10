<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class AlianzaResource extends JsonResource
{
    public function toArray($request)
    {   
        return [
            'id' => $this->ali_id,
            'nombre' => $this->ali_nombre,
            'orden' => $this->ali_orden,
            'estado' => $this->ali_estado,
            'pagina' => $this->pagina_editable->edi_titulo,
        ];
    }
}
