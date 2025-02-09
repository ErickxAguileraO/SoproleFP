<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Region extends Model
{
    use HasFactory;

    protected $table = 'region';

    protected $primaryKey = 'reg_id';

    protected $fillable = [
        'reg_nombre',
    ];
}
