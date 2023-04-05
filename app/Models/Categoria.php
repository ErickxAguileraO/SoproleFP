<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Categoria extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'categorias';

    protected $primaryKey = 'cat_id';

    protected $fillable = [
        'cat_nombre',
        'cat_orden',
        'cat_estado',
    ];
}
