<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Noticia extends Model
{
    use HasFactory;

    protected $table = 'noticias';

    protected $primaryKey = 'not_id';

    protected $fillable = [
        'not_titulo',
        'not_titulo2',
        'not_contenido',
        'not_slider',
        'not_fecha',
        'not_url',
        'not_estado'
    ];

    public function imagenes()
    {
        return $this->hasMany(ImagenNoticia::class,'ino_noticia_id', 'not_id');
    }

    public function segmentos()
    {
        return $this->belongsToMany(Segmento::class,'noticia_segmento','notseg_noticia_id','notseg_segmento_id');
    }
    
    public function imagenListado()
    {
        return $this->hasOne(ImagenNoticia::class,'ino_noticia_id', 'not_id')->latest();
    }

}
