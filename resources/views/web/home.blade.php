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
            <h2>¿Qué tipo de preparaciones desarrollas en tu negocio? </h2>
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
                <h2>Conoce la Academia Food Professionals</h2>
                <br>
                <p class="sub-titulo">Nos apasiona apoyar el desarrollo de tu negocio gastronómico. Por ello, a través de
                    nuestra academia, te brindamos herramientas que buscan potenciar tu pastelería, pizzería, restaurante,
                    banquetería o cafetería. </p>
                <div class="cuadros-info cuadros-row-4">
                    @foreach ($academias as $academia)
                        <a href="{{ route('web.academia.detalle', $academia->aca_id) . '-' . $academia->aca_url }}"
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
            <h2>Mira nuestros productos</h2>
            <br>
            <p class="sub-titulo">Nos apasiona entregar productos de calidad. Por ello, estamos enfocados en innovar y
                desarrollar productos acordes a las necesidades de tu negocio. </p>
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
            <h2>Mira estas recetas</h2>
            <br>
            <p class="sub-titulo">Nos apasiona ayudarte a crecer, y con estas recetas, podrás expandir tu menú y descubrir
                nuevas técnicas para crear sonrisas en quienes disfruten de tus preparaciones. </p>
            <div class="cuadros-info cuadros-row-3">
                @foreach ($recetas as $receta)
                    <a href="{{ route('web.receta.detalle', $receta->rec_id) . '-' . $receta->rec_url }}"
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
            <h2>Conoce más sobre Tendencias y Noticias</h2>
            <br>
            <p class="sub-titulo">Nos apasiona mantenerte informado, y esta sección, encontrarás las últimas noticias sobre
                capacitaciones, eventos, tendencias y todo lo relacionado al mundo gastronómico. </p>
            <div class="cuadros-info cuadros-row-3">
                @foreach ($noticias as $noticia)
                    <a href="{{ route('web.noticia.detalle', $noticia->not_id) . '-' . $noticia->not_url }}"
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
                    <h3>Conócenos</h3>
                </div>
            </div>
            <div class="concenos-img-txt">
                <div>
                    <div class="img"><img src="{{ asset('/public/web/imagenes/conocenos-home.jpg') }}" alt="">
                    </div>
                </div>
                <div>
                    @php
                        // echo $conocenos->edi_bajada;
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
                    <h3>Conócenos</h3>
                    @php
                        // echo $conocenos->edi_bajada;
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
