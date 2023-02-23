<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comuna extends Model
{
    use HasFactory;

    protected $table = 'comuna';

    protected $primaryKey = 'com_id';

    protected $fillable = [
        'com_nombre',
        'com_region_id',
    ];

    public function Region()
    {
        return $this->hasOne(Region::class,'reg_id','com_region_id');
    }


}
