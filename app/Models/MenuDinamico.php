<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuDinamico extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'menu_dinamico';

    protected $primaryKey = 'mdi_id';

    protected $fillable = [
        'mdi_nombre',
        'mdi_orden',
        'mdi_estado',
    ];
}
