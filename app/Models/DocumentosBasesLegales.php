<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DocumentosBasesLegales extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'documentos_bases_legales';

    protected $primaryKey = 'dbs_id';

    protected $fillable = [
        'dbs_nombre',
        'dbs_archivo',
        'dbs_orden'
    ];
}
