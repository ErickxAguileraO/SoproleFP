<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Local extends Model
{
    use HasFactory;

    protected $table = 'locales';

    protected $primaryKey = 'loc_id';

    protected $fillable = [
        'loc_nombre',
        'loc_comuna_id',
        'loc_orden',
        'loc_estado'
    ];
}
