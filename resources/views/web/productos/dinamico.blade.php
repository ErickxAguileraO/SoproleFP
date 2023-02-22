@foreach ($productos as $pro)
    <a href="/productos/detalle/{{ $pro->pro_url }}"class="cuadros-info-n">
        <div class="img"><img src="{{ asset($pro->pro_imagen) }}" alt=""></div>
        <div class="texto">
            <h5>{{ $pro->pro_titulo }}</h5>
        </div>
    </a>
@endforeach