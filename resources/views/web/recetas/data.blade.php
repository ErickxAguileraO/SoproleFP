<section class="seccion-listas">
    <input style="display: none;" type="text" id="old_filtro_segmento" name="old_filtro_segmento" value="{{$segmentosId}}">
    <input style="display: none;" type="text" id="old_filtro_producto" name="old_filtro_producto" value="{{$productosId}}">
    <div class="cuadros-info cuadros-row-4">
        @foreach ($recetas as $item)
            <a href="{{route('web.receta.detalle', $item->rec_id).'-'.$item->rec_url}}" class="cuadros-info-n">
                <div class="img"><img src="{{ isset($item->rec_imagen) ? asset($item->rec_imagen) : NULL }}" alt=""></div>
                <div class="texto">
                    <h5>{{$item->rec_titulo}}</h5>
                </div>
            </a>
        @endforeach
    </div>
</section>
{{ $recetas->appends(request()->all())->links() }}
