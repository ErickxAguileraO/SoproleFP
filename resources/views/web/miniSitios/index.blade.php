@extends('layout.web')

@section('title', 'Inicio')

@section('content')
    @push('extra-css')
    @endpush
    <div class="contenido color-mini-sitio">
        <div class="flexslider-seccion">
            <ul class="slides">
                <!-- 1 -->
                <li style=" z-index:0; opacity: 1;" class="li-slider">
                    <img class="ocultar-movil" src="{{ asset('/public/web/imagenes/portada-minisitio-escritorio.svg') }}" alt="">
                    <img class="ocultar-escritorio" src="{{ asset('/public/web/imagenes/portada-minisitio-movil.svg') }}" alt="">
                </li>
    
                <!-- 2 -->
                <li style=" z-index:0; opacity: 1;" class="li-slider">
                    <img class="ocultar-movil" src="{{ asset('/public/web/imagenes/portada-minisitio-escritorio.svg') }}" alt="">
                    <img class="ocultar-escritorio" src="{{ asset('/public/web/imagenes/portada-minisitio-movil.svg') }}" alt="">
                </li>
    
                <!-- 3 -->
                <li style=" z-index:0; opacity: 1;" class="li-slider">
                    <img class="ocultar-movil" src="{{ asset('/public/web/imagenes/portada-minisitio-escritorio.svg') }}" alt="">
                    <img class="ocultar-escritorio" src="{{ asset('/public/web/imagenes/portada-minisitio-movil.svg') }}" alt="">
                </li>
            </ul>
        </div>
        <div class="flex-tu-negocio">
            <h2>¿De qué es tu negocio?</h2>
            <br>
            <div class="tu-negocio">
                <button class="segmento-n bg-minisitio color-mini-sitio">Papas fritas</button>
                <button class="segmento-n bg-minisitio color-mini-sitio">Hamburguesas</button>
                <button class="segmento-n bg-minisitio color-mini-sitio">Sushi</button>
                <button class="segmento-n bg-minisitio color-mini-sitio">Subsegmento</button>
                <button class="segmento-n bg-minisitio color-mini-sitio">Subsegmento</button>
                <button class="segmento-n bg-minisitio color-mini-sitio">Subsegmento</button>
                <button class="segmento-n bg-minisitio color-mini-sitio">Subsegmento</button>
                <button class="segmento-n bg-minisitio color-mini-sitio">Subsegmento</button>


            </div> 
        </div>
        <section class="seccion-home">
            <h2>Mira nuestros productos</h2>
            <br>
            <p class="sub-titulo">Como líderes en innovación e investigación de Mercado, constantemente estamos creando nuevos usos lácteos, perfectos para cada propósito</p>
            <div class="cuadros-info cuadros-row-4">
                <a href="/producto-detalle" class="cuadros-info-n">
                    <div class="img"><img src="{{ asset('/public/web/imagenes/img-cuadro-1.svg') }}" alt=""></div>
                    <div class="texto">
                        <h5>Título con una línea</h5>
                    </div>
                </a>

                <a href="/producto-detalle" class="cuadros-info-n">
                    <div class="img"><img src="{{ asset('/public/web/imagenes/img-cuadro-2.svg') }}" alt=""></div>
                    <div class="texto">
                        <h5>Título con una línea</h5>
                    </div>
                </a>

                <a href="/producto-detalle" class="cuadros-info-n">
                    <div class="img"><img src="{{ asset('/public/web/imagenes/img-cuadro-1.svg') }}" alt=""></div>
                    <div class="texto">
                        <h5>Título con una línea</h5>
                    </div>
                </a>

                <a href="/producto-detalle" class="cuadros-info-n">
                    <div class="img"><img src="{{ asset('/public/web/imagenes/img-cuadro-2.svg') }}" alt=""></div>
                    <div class="texto">
                        <h5>Título con una línea</h5>
                    </div>
                </a>
            </div>
        </section>
        <section class="flex-academia-home bg-minisitio">
            <div class="seccion-home">
                <h2>Academia Food Professionals</h2>
                <br>
                <p class="sub-titulo">Nos apasiona ayudar a nuestros clientes, logrando la optimización de sus recursos, haciendo más eficiente sus procesos, alcanzando una mayor calidad y  expertíz en su negocio</p>
                <div class="cuadros-info cuadros-row-4">
                    <a href="/academia-detalle" class="cuadros-info-n">
                        <div class="img"><img src="{{ asset('/public/web/imagenes/img-cuadro-1.svg') }}" alt=""></div>
                        <div class="texto">
                            <h5>Título con una línea</h5>
                            <p>Este es el texto de relleno de esta tarjeta. La idea es rellenar esto para hacernos una idea de cómo el texto se va a ver en esta parte de la tarjeta.</p>
                        </div>
                    </a>

                    <a href="/academia-detalle" class="cuadros-info-n">
                        <div class="img"><img src="{{ asset('/public/web/imagenes/img-cuadro-2.svg') }}" alt=""></div>
                        <div class="texto">
                            <h5>Título con una línea</h5>
                            <p>Este es el texto de relleno de esta tarjeta. La idea es rellenar esto para hacernos una idea de cómo el texto se va a ver en esta parte de la tarjeta.</p>
                        </div>
                    </a>

                    <a href="/academia-detalle" class="cuadros-info-n">
                        <div class="img"><img src="{{ asset('/public/web/imagenes/img-cuadro-1.svg') }}" alt=""></div>
                        <div class="texto">
                            <h5>Título con una línea</h5>
                            <p>Este es el texto de relleno de esta tarjeta. La idea es rellenar esto para hacernos una idea de cómo el texto se va a ver en esta parte de la tarjeta.</p>
                        </div>
                    </a>

                    <a href="/academia-detalle" class="cuadros-info-n">
                        <div class="img"><img src="{{ asset('/public/web/imagenes/img-cuadro-2.svg') }}" alt=""></div>
                        <div class="texto">
                            <h5>Título con una línea</h5>
                            <p>Este es el texto de relleno de esta tarjeta. La idea es rellenar esto para hacernos una idea de cómo el texto se va a ver en esta parte de la tarjeta.</p>
                        </div>
                    </a>
                </div>

                <a href="" class="boton bg-red">Ver más cursos</a>
            </div>
        </section>

      

        <section class="seccion-home">
            <h2>Mira estas recetas</h2>
            <br>
            <p class="sub-titulo">Como líderes en innovación e investigación de Mercado, constantemente estamos creando nuevos usos lácteos, perfectos para cada propósito</p>
            <div class="cuadros-info cuadros-row-3">
                <a href="/receta-detalle" class="cuadros-info-n">
                    <div class="img"><img src="{{ asset('/public/web/imagenes/img-cuadro-3.svg') }}" alt=""></div>
                    <div class="texto">
                        <h5>Título con una línea</h5>
                    </div>
                </a>

                <a href="/receta-detalle" class="cuadros-info-n">
                    <div class="img"><img src="{{ asset('/public/web/imagenes/img-cuadro-3.svg') }}" alt=""></div>
                    <div class="texto">
                        <h5>Título con una línea</h5>
                    </div>
                </a>

                <a href="/receta-detalle" class="cuadros-info-n">
                    <div class="img"><img src="{{ asset('/public/web/imagenes/img-cuadro-3.svg') }}" alt=""></div>
                    <div class="texto">
                        <h5>Título con una línea</h5>
                    </div>
                </a>
            </div>
        </section>


        <section class="seccion-home">
            <h2>Tendencias y Noticias</h2>
            <br>
            <p class="sub-titulo">Como líderes en innovación e investigación de Mercado, constantemente estamos creando nuevos usos lácteos, perfectos para cada propósito</p>
            <div class="cuadros-info cuadros-row-3">
                <a href="/detalle-noticia-tendencia" class="cuadros-info-n">
                    <div class="img"><img src="{{ asset('/public/web/imagenes/img-cuadro-3.svg') }}" alt=""></div>
                    <div class="texto">
                        <h5>Título con una línea</h5>
                    </div>
                </a>

                <a href="/detalle-noticia-tendencia" class="cuadros-info-n">
                    <div class="img"><img src="{{ asset('/public/web/imagenes/img-cuadro-3.svg') }}" alt=""></div>
                    <div class="texto">
                        <h5>Título con una línea</h5>
                    </div>
                </a>

                <a href="/detalle-noticia-tendencia" class="cuadros-info-n">
                    <div class="img"><img src="{{ asset('/public/web/imagenes/img-cuadro-3.svg') }}" alt=""></div>
                    <div class="texto">
                        <h5>Título con una línea</h5>
                    </div>
                </a>
            </div>
        </section>
    </div>
    
    @push('extra-js')
        <script>
            // Flex Slider
            $(document).ready(function(){
                $('.flexslider-seccion').flexslider({
                    animation: "slide",
                });
            });
        </script>
    @endpush

@endsection
