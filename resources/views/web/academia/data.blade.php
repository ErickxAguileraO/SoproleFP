<section class="seccion-home seccion-listas">
    <div class="cuadros-info cuadros-row-3">
        <input style="display: none;" type="text" id="old_filtro_segmento" name="old_filtro_segmento" value="{{$segmentosId}}">
        @foreach ($academias as $item)
            <div class="cuadros-info-n noticia-tendencia academia">
                <div class="img"><iframe src="https://www.youtube.com/embed/{{ GetYoutubeID($item->aca_video) }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></div>
                <div class="texto">
                    <div>
                        <h5>{{$item->aca_titulo}}</h5>
                        <span>{{$item->aca_fecha}}</span>
                        <p>{{$item->aca_titulo2}}</p>
                    
                    </div>
                    <a href="{{route('web.academia.detalle', $item->aca_id).'-'.$item->aca_url }}" class="boton-noticia-tendencia">Ver ahora</a>
                </div>
            </div>
        @endforeach
    </div>
</section>
{{ $academias->appends(request()->all())->links() }}