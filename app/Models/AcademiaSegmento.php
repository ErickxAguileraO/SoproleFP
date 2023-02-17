<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class AcademiaSegmento extends Model
{
    use HasFactory;

    protected $table = 'academia_segmento';

    protected $primaryKey = 'acaseg_id';

    protected $fillable = [
        'acaseg_academia_id',
        'acaseg_segmento_id',
    ];

    public function academias()
    {
        return $this->belongsToMany(Academia::class,'aca_id', 'acaseg_academia_id');
    }


}
