<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Segmento extends Model
{
    use HasFactory;

    protected $table = 'segmentos';

    protected $primaryKey = 'seg_id';

    protected $fillable = [
        'seg_nombre',
        'seg_url',
        'seg_color',
        'seg_color_texto',
        'seg_color_anterior',
        'seg_imagen',
        'seg_orden',
        'seg_estado',
    ];

    public function Receta() // tiene muchos Receta
    {
        return $this->belongsToMany(Receta::class, 'receta_segmento', 'recseg_segmento_id', 'recseg_receta_id')->with('Producto');
    }

    public function Academia()
    {
        return $this->belongsToMany(Academia::class, 'academia_segmento', 'acaseg_segmento_id', 'acaseg_academia_id')
            ->where('aca_estado', 1)
            ->orderBy('aca_orden', 'ASC')
            ->distinct();
    }

    public function Slider()
    {
        return $this->belongsToMany(Slider::class, 'slider_segmento', 'sliseg_segmento_id', 'sliseg_slider_id')
            ->where('sli_estado', 1)
            ->orderBy('sli_orden', 'ASC')
            ->distinct();
    }

    public function Noticia()
    {
        return $this->belongsToMany(Noticia::class, 'noticia_segmento', 'notseg_segmento_id', 'notseg_noticia_id')
            ->where('not_estado', 1)
            ->orderBy('not_fecha', 'DESC')
            ->distinct();
    }

    public function Subsegmento()
    {
        return $this->belongsToMany(SubSegmento::class, 'pivote_sub_segmentos', 'psse_segmento_id', 'psse_subsegmento_id')
            ->where('sse_estado', 1)
            ->orderBy('sse_orden', 'ASC')
            ->distinct();
    }


    public function AcademiaMiniSitio()
    {
        return $this->belongsToMany(Academia::class, 'academia_segmento', 'acaseg_segmento_id', 'acaseg_academia_id')
            ->where('aca_estado', 1)
            ->orderBy('aca_orden', 'ASC')
            ->take(4)
            ->distinct();
    }

    public function NoticiaMiniSitio()
    {
        return $this->belongsToMany(Noticia::class, 'noticia_segmento', 'notseg_segmento_id', 'notseg_noticia_id')
            ->where('not_estado', 1)
            ->orderBy('not_fecha', 'DESC')
            ->take(3)
            ->distinct();
    }
}
