@extends('layout.web')

@section('title', 'Conocenos')

@section('content')
    @push('extra-css')
    @endpush
    <div class="portada">
        <img class="ocultar-movil" src="{{ asset('/public/web/imagenes/portada-conocenos-escritorio.svg') }}" alt="">
        <img class="ocultar-escritorio" src="{{ asset('/public/web/imagenes/portada-conocenos-movil.svg') }}" alt="">
    </div>
    <div class="contenido">
        <section class="proposito">
            <div>
                <h2>{{ $conocenos->edi_titulo }}</h2>
                @php
                    echo $conocenos->edi_contenido;
                @endphp
            </div>

            @if ($conocenos->imagenes && count($conocenos->imagenes) > 0)
                <div class="flexslider-seccion">
                    <ul class="slides slider-proposito">
                        @foreach ($conocenos->imagenes as $imagen)
                            <li style=" z-index:0; opacity: 1;" class="li-slider">
                                <img src="{{ asset($imagen->ied_imagen) }}" alt="">
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </section>

        @if ($conocenos->edi_video)
            <section class="video-conocenos">
                <iframe src="https://www.youtube.com/embed/{{ GetYoutubeID($conocenos->edi_video) }}"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
            </section>
        @endif

        @if (count($alianzas) > 0)
            <section class="seccion-home">
                <h2>Nuestras alianzas</h2>
                <br>
                <p class="sub-titulo">Como líderes en innovación e investigación de Mercado, constantemente estamos creando
                    nuevos usos lácteos, perfectos para cada propósito</p>
                <div class="alianzas-img">
                    @foreach ($alianzas as $alianza)
                        <img src="{{ asset($alianza->ali_imagen) }}" alt="">
                    @endforeach
                </div>
            </section>
        @endif
        @if (count($clientes) > 0)
        <section class="seccion-home">
            <h2>Confian en nosotros</h2>
            <br>
            <p class="sub-titulo">Como líderes en innovación e investigación de Mercado, constantemente estamos creando
                nuevos usos lácteos, perfectos para cada propósito</p>
            <div class="alianzas-img">
                @foreach ($clientes as $cliente)
                <img src="{{ asset($cliente->clie_imagen) }}" alt="">
                @endforeach
            </div>
        </section>
        @endif
    </div>

    @push('extra-js')
        <script>
            $(document).ready(function() {
                $('.flexslider-seccion').flexslider({
                    animation: "slide",
                });
            });
        </script>
    @endpush

@endsection
