@extends('layout.web')

@section('title', 'Inicio')
@section('content')
    <div class="contenido contenidoMiniSitio color-mini-sitio">
        <input type="hidden" id="segmento_id" value="{{ $segmento->seg_id }}" />
        @if (count($sliders) > 0)
            <div class="flexslider-seccion">
                <ul class="slides">
                    @foreach ($sliders as $slider)
                        <li style=" z-index:0; opacity: 1;" class="li-slider">
                            <img class="ocultar-movil" src="{{ asset($slider->sli_imagen) }}" alt="">
                            <img class="ocultar-escritorio" src="{{ asset($slider->sli_imagen_movil) }}" alt="">
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if (count($tags) > 0)
            <div class="flex-tu-negocio">
                <h2>¿De qué es tu negocio?</h2>
                <br>
                <div class="tu-negocio">
                    @foreach ($tags as $tag)
                        <button codigo="{{ $tag->sse_id }}"
                            class="tags segmento-n bg-minisitio color-mini-sitio">{{ $tag->sse_nombre }}</button>
                    @endforeach
                </div>
            </div>
        @endif

        <img class="spinner" style="display:none" src="/public/web/imagenes/loading_icon.svg" />

        @if (count($productos) > 0)
            <section class="seccion-home removeSection">
                <h2>Mira nuestros productos</h2>
                <br>
                <p class="sub-titulo">Como líderes en innovación e investigación de Mercado, constantemente estamos creando
                    nuevos usos lácteos, perfectos para cada propósito</p>
                <div class="cuadros-info cuadros-row-4">
                    @foreach ($productos as $producto)
                        <a href="/producto/detalle/{{ $producto->pro_url }}" class="cuadros-info-n">
                            <div class="img"><img src="{{ asset($producto->pro_imagen) }}" alt="">
                            </div>
                            <div class="texto">
                                <h5>{{ $producto->pro_titulo }}</h5>
                            </div>
                        </a>
                    @endforeach
                </div>
            </section>
        @endif

        @if (count($academias) > 0)
            <section class="flex-academia-home bg-minisitio removeSection">
                <div class="seccion-home">
                    <h2>Academia Food Professionals</h2>
                    <br>
                    <p class="sub-titulo">Nos apasiona ayudar a nuestros clientes, logrando la optimización de sus recursos,
                        haciendo más eficiente sus procesos, alcanzando una mayor calidad y expertíz en su negocio</p>
                    <div class="cuadros-info cuadros-row-4">

                        @foreach ($academias as $academia)
                            <a href="{{route('web.academia.detalle', $academia->aca_id).'-'.$academia->aca_url }}" class="cuadros-info-n">
                                <div class="img"><img src="{{ asset($academia->aca_imagen) }}" alt="">
                                </div>
                                <div class="texto">
                                    <h5>{{ $academia->aca_titulo }}</h5>
                                    <p>{{ $academia->aca_titulo2 }}</p>
                                </div>
                            </a>
                        @endforeach
                    </div>
                    <a href="{{route('web.academia.index').'?segmentoId[0]='.$segmento->seg_id}}" class="boton bg-red">Ver más cursos</a>
                </div>
            </section>
        @endif


        @if (count($recetas) > 0)

            <section class="seccion-home removeSection">
                <h2>Mira estas recetas</h2>
                <br>
                <p class="sub-titulo">Como líderes en innovación e investigación de Mercado, constantemente estamos creando
                    nuevos usos lácteos, perfectos para cada propósito</p>
                <div class="cuadros-info cuadros-row-3">
                    @foreach ($recetas as $receta)
                        <a href="{{route('web.receta.detalle', $receta->rec_id).'-'.$receta->rec_url }}" class="cuadros-info-n">
                            <div class="img"><img src="{{ asset($receta->rec_imagen) }}" alt="">
                            </div>
                            <div class="texto">
                                <h5>{{ $receta->rec_titulo }}</h5>
                            </div>
                        </a>
                    @endforeach
                </div>
            </section>
        @endif


        @if (count($noticias) > 0)
            <section class="seccion-home removeSection">
                <h2>Tendencias y Noticias</h2>
                <br>
                <p class="sub-titulo">Como líderes en innovación e investigación de Mercado, constantemente estamos creando
                    nuevos usos lácteos, perfectos para cada propósito</p>
                <div class="cuadros-info cuadros-row-3">
                    @foreach ($noticias as $noticia)
                        <a href="{{route('web.noticia.detalle', $noticia->not_id).'-'.$noticia->not_url }}" class="cuadros-info-n">
                            <div class="img"><img src="{{ asset($noticia->imagenListado->ino_imagen) }}" alt="">
                            </div>
                            <div class="texto">
                                <h5>Título con una línea</h5>
                            </div>
                        </a>
                    @endforeach
                </div>
            </section>
        @endif
    </div>


    @push('extra-js')
        <script src="{{ asset('public/web/js/mini_sitio/index.js?v=' . rand()) }}"></script>

        <script>
            // Flex Slider
            $(document).ready(function() {
                $('.flexslider-seccion').flexslider({
                    animation: "slide",
                });
            });
        </script>
    @endpush

    <style>
        .color-mini-sitio h2,
        .color-mini-sitio h6,
        .color-mini-sitio h5 {
            color: {{ $segmento->seg_color_texto }} !important;
        }

        .bg-minisitio {
            background-color: {{ $segmento->seg_color }} !important;
        }
    </style>

@endsection
