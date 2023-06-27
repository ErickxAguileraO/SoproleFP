@extends('layout.web')

@section('title', 'Inicio')

@section('content')
    @push('extra-css')
    @endpush
    <div class="contenido">
        <div class="flexslider-seccion">
            <ul class="slides">

                @foreach ($sliders as $slider)
                    <li style=" z-index:0; opacity: 1;" class="li-slider" enlace="{{ $slider->sli_link }}">
                        <img class="ocultar-movil" style="{{ $slider->sli_link ? 'cursor:pointer' : '' }}"
                            src="{{ asset($slider->sli_imagen) }}" alt="">
                        <img class="ocultar-escritorio" src="{{ asset($slider->sli_imagen_movil) }}" alt="">
                    </li>
                @endforeach
            </ul>
        </div>
        <div class="flex-tu-negocio">
            <h2>{{ $result->titulo }} </h2>
            <p class="sub-titulo">{{ $result->descripcion }}</p>
            <div class="tu-negocio">
                @foreach ($segmentos as $segmento)
                    <a href="/mini-sitio/{{ $segmento->seg_url }}" class="tu-negocio-n neg-1"
                        style="background:{{ $segmento->seg_color }};color:{{ $segmento->seg_color_texto }};">
                        <img src="{{ asset($segmento->seg_imagen) }}" alt="">
                        <p>{{ $segmento->seg_nombre }}</p>
                    </a>
                @endforeach
            </div>
        </div>

        <section class="flex-academia-home">
            <div class="seccion-home">
                <h2>{{ $result->tit_titulo_dos_home }}</h2>
                <br>
                <p class="sub-titulo">{{ $result->tit_descripcion_dos_home }}</p>
                <div class="cuadros-info cuadros-row-4">
                    @foreach ($academias as $academia)
                        <a href="/academia/detalle/{{ $academia->aca_url }}"
                            class="cuadros-info-n">
                            <div class="img"><img src="{{ asset($academia->aca_imagen) }}" alt="">
                            </div>
                            <div class="texto">
                                <h5>{{ $academia->aca_titulo }}</h5>
                                <p>{{ $academia->aca_titulo2 }}</p>
                            </div>
                        </a>
                    @endforeach
                </div>
                <a href="{{ route('web.academia.index') }}" class="boton bg-red">Ver más cursos</a>
            </div>
        </section>

        <section class="seccion-home">
            <h2>{{ $result->tit_titulo_tres_home }}</h2>
            <br>
            <p class="sub-titulo">{{ $result->tit_descripcion_tres_home }}</p>
            <div class="cuadros-info cuadros-row-4">
                @foreach ($productos as $producto)
                    <a href="/productos/detalle/{{ $producto->pro_url }}" class="cuadros-info-n">
                        <div class="img"><img src="{{ asset($producto->pro_imagen) }}" alt="">
                        </div>
                        <div class="texto">
                            <h5>{{ $producto->pro_titulo }}</h5>
                        </div>
                    </a>
                @endforeach
            </div>
            <a href="/productos" class="boton bg-red">Ver todos los productos</a>
        </section>

        <section class="seccion-home">
            <h2>{{ $result->tit_titulo_cuatro_home }}</h2>
            <br>
            <p class="sub-titulo">{{ $result->tit_descripcion_cuatro_home }}</p>
            <div class="cuadros-info cuadros-row-3">
                @foreach ($recetas as $receta)
                    <a href="/receta/detalle/{{ $receta->rec_url }}"
                        class="cuadros-info-n">
                        <div class="img"><img src="{{ asset($receta->rec_imagen) }}" alt="">
                        </div>
                        <div class="texto">
                            <h5>{{ $receta->rec_titulo }}</h5>
                        </div>
                    </a>
                @endforeach
            </div>
            <a href="{{ route('web.receta.index') }}" class="boton bg-red">Ver todas las recetas</a>
        </section>

        <section class="seccion-home">
            <h2>{{ $result->tit_titulo_cinco_home }}</h2>
            <br>
            <p class="sub-titulo">{{ $result->tit_descripcion_cinco_home }}</p>
            <div class="cuadros-info cuadros-row-3">
                @foreach ($noticias as $noticia)
                    <a href="/noticia/detalle/{{ $noticia->not_url }}"
                        class="cuadros-info-n">
                        <div class="img">
                            @if (isset($noticia->imagenes[0]->ino_imagen))
                                <img src="{{ asset($noticia->imagenes[0]->ino_imagen) }}" alt="">
                            @else
                                <img src="/public/web/imagenes/no-imagen.png" alt="">
                            @endif
                        </div>
                        <div class="texto">
                            <h5>{{ $noticia->not_titulo }}</h5>
                            <p>{{ $noticia->not_titulo2 }}</p>
                        </div>
                    </a>
                @endforeach
            </div>
            <a href="{{ route('web.noticia.index') }}" class="boton bg-red">Ver todas las noticias y tendencias</a>
        </section>

        <section class="conocenos mostrar-1920">
            <div class="concenos-txt">
                <div></div>
                <div>
                    <h3>{{ $result->tit_titulo_seis_home }}</h3>
                </div>
            </div>
            <div class="concenos-img-txt">
                <div>
                    <div class="img"><img src="{{ asset('/public/web/imagenes/conocenos-home.jpg') }}" alt="">
                    </div>
                </div>
                <div>
                    @php
                        echo $conocenos->edi_bajada;
                    @endphp
                    </p>
                    <a href="/conocenos" class="boton-conocenos">Ver más sobre nosotros</a>
                </div>
            </div>
        </section>

        <section class="conocenos mostrar-1100">
            <div class="concenos-img-txt">
                <div>
                    <div class="img"><img src="{{ asset('/public/web/imagenes/conocenos-home.jpg') }}" alt="">
                    </div>
                </div>
                <div class="conocenos-txt">
                    <h3>{{ $result->tit_titulo_seis_home }}</h3>
                    @php
                        echo $conocenos->edi_bajada;
                    @endphp
                    <a href="/conocenos" class="boton-conocenos">Ver más sobre nosotros</a>
                </div>
            </div>
        </section>

        <img style="width: 100%; margin-top: -5px;" src="{{ asset('/public/web/imagenes/curva2.png') }}" alt="">
    </div>

    @push('extra-js')
        <script>
            $(document).ready(function() {
                $(".li-slider").click(function() {
                    let enlace = $(this).attr('enlace');
                    if (enlace) {
                        document.location.href=enlace;
                    }
                })
                $('.flexslider-seccion').flexslider({
                    animation: "slide",
                });
            });
        </script>
    @endpush

@endsection
