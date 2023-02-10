<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Alianza extends Model
{
    use HasFactory;

    protected $table = 'alianzas';

    protected $primaryKey = 'ali_id';

    protected $fillable = [
        'ali_nombre',
        'ali_imagen',
        'ali_estado',
        'ali_orden',
        'ali_editable_id',
    ];

    public function pagina_editable()
    {
        return $this->belongsTo(Editable::class,'ali_editable_id', 'edi_id');
    }
}
