<div class="cuadros-info cuadros-row-3" id="div_noticias">
    <input style="display: none;" type="text" id="old_filtro_segmento" name="old_filtro_segmento" value="{{$segmentosId}}">
    @foreach ($noticias as $item)
        <div class="cuadros-info-n noticia-tendencia">
            <div class="img"><img src="{{ isset($item->imagenes[0]->ino_imagen) ? asset($item->imagenes[0]->ino_imagen) : NULL }}" alt=""></div>
            <div class="texto">
                <div>
                    <h5>{{$item->not_titulo}}</h5>
                    <span>{{$item->not_fecha}}</span>
                    <p>{{$item->not_titulo2}}</p>                  
                </div>
                
                <a href="{{route('webnoticia.detalle', $item->not_id).'-'.$item->not_url}}" class="boton-noticia-tendencia">Ver</a>
            </div>
        </div>
    @endforeach
</div>
{{ $noticias->appends(request()->all())->links() }}