<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Slider extends Model
{
    use HasFactory;

    protected $table = 'slider';

    protected $primaryKey = 'sli_id';

    protected $fillable = [
        'sli_nombre',
        'sli_imagen',
        'sli_estado',
    ];
}
