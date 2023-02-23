<div class="cuadros-info cuadros-row-4">
    <input style="display: none;" type="text" id="old_filtro_segmento" name="old_filtro_segmento"
        value="{{ $segmentosId }}">
    <input style="display: none;" type="text" id="old_filtro_categoria" name="old_filtro_categoria"
        value="{{ $categoriasId }}">

    @foreach ($productos as $pro)
        <a href="/productos/detalle/{{ $pro->pro_url }}"class="cuadros-info-n">
            <div class="img"><img src="{{ asset($pro->pro_imagen) }}" alt=""></div>
            <div class="texto">
                <h5>{{ $pro->pro_titulo }}</h5>
            </div>
        </a>
    @endforeach
</div>
{{ $productos->appends(request()->query())->links() }}
