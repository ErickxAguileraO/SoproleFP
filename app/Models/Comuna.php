<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comuna extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'comuna';

    protected $primaryKey = 'com_id';

    protected $fillable = [
        'com_nombre',
        'com_region_id',
    ];
}
