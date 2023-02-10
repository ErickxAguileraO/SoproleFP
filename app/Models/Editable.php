<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Editable extends Model
{
    use HasFactory;

    protected $table = 'editables';

    protected $primaryKey = 'edi_id';

    protected $fillable = [
        'edi_titulo',
        'edi_contenido',
        'edi_video',
        'edi_tipo',
    ];

    public function imagenes()
    {
        return $this->hasMany(ImagenEditable::class,'ied_editable_id', 'edi_id');
    }


}
