<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ImagenEditable extends Model
{
    use HasFactory;

    protected $table = 'imagen_editable';

    protected $primaryKey = 'ied_id';

    protected $fillable = [
        'ied_imagen',
        'ied_editable_id',
    ];
}
