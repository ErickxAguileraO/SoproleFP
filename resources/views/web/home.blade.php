@extends('layout.web')

@section('title', 'Inicio')

@section('content')
    @push('extra-css')
    @endpush
    <div class="contenido">
        <div class="flexslider-seccion">
            <ul class="slides">
                <!-- 1 -->
                <li style=" z-index:0; opacity: 1;" class="li-slider">
                    <img src="{{ asset('/web/imagenes/portada-home-escritorio.svg') }}" alt="">
                </li>
    
                <!-- 2 -->
                <li style=" z-index:0; opacity: 1;" class="li-slider">
                    <img src="{{ asset('/web/imagenes/portada-home-escritorio.svg') }}" alt="">
                </li>
    
                <!-- 3 -->
                <li style=" z-index:0; opacity: 1;" class="li-slider">
                    <img src="{{ asset('/web/imagenes/portada-home-escritorio.svg') }}" alt="">
                </li>
            </ul>
        </div>
        <div class="flex-tu-negocio">
            <h2>¿De qué es tu negocio?</h2>
            <div class="tu-negocio">
                <a href="/mini-sitio" class="tu-negocio-n neg-1">
                    <img src="{{ asset('/web/imagenes/i-pasteleria.svg') }}" alt="">
                    <p>Pastelería</p>
                </a>
    
                <a href="/mini-sitio" class="tu-negocio-n neg-2">
                    <img src="{{ asset('/web/imagenes/i-citaliana.svg') }}" alt="">
                    <p>Comida Italiana</p>
                </a>
    
                <a href="/mini-sitio" class="tu-negocio-n neg-3">
                    <img src="{{ asset('/web/imagenes/i-crapida.svg') }}" alt="">
                    <p>Comida Rápida</p>
                </a>
    
                <a href="/mini-sitio" class="tu-negocio-n neg-4">
                    <img src="{{ asset('/web/imagenes/i-cafeteria.svg') }}" alt="">
                    <p>Cafetería</p>
                </a>
    
                <a href="/mini-sitio" class="tu-negocio-n neg-5">
                    <img src="{{ asset('/web/imagenes/i-salimentacion.svg') }}" alt="">
                    <p>Servicios de alimentación</p>
                </a>
            </div> 
        </div>

        <section class="flex-academia-home">
            <div class="seccion-home">
                <h2>Academia Food Professionals</h2>
                <br>
                <p class="sub-titulo">Nos apasiona ayudar a nuestros clientes, logrando la optimización de sus recursos, haciendo más eficiente sus procesos, alcanzando una mayor calidad y  expertíz en su negocio</p>
                <div class="cuadros-info cuadros-row-4">
                    <a href="" class="cuadros-info-n">
                        <div class="img"><img src="{{ asset('/web/imagenes/img-cuadro-1.svg') }}" alt=""></div>
                        <div class="texto">
                            <h5>Título con una línea</h5>
                            <p>Este es el texto de relleno de esta tarjeta. La idea es rellenar esto para hacernos una idea de cómo el texto se va a ver en esta parte de la tarjeta.</p>
                        </div>
                    </a>

                    <a href="" class="cuadros-info-n">
                        <div class="img"><img src="{{ asset('/web/imagenes/img-cuadro-2.svg') }}" alt=""></div>
                        <div class="texto">
                            <h5>Título con una línea</h5>
                            <p>Este es el texto de relleno de esta tarjeta. La idea es rellenar esto para hacernos una idea de cómo el texto se va a ver en esta parte de la tarjeta.</p>
                        </div>
                    </a>

                    <a href="" class="cuadros-info-n">
                        <div class="img"><img src="{{ asset('/web/imagenes/img-cuadro-1.svg') }}" alt=""></div>
                        <div class="texto">
                            <h5>Título con una línea</h5>
                            <p>Este es el texto de relleno de esta tarjeta. La idea es rellenar esto para hacernos una idea de cómo el texto se va a ver en esta parte de la tarjeta.</p>
                        </div>
                    </a>

                    <a href="" class="cuadros-info-n ocultar-576">
                        <div class="img"><img src="{{ asset('/web/imagenes/img-cuadro-2.svg') }}" alt=""></div>
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
            <h2>Mira nuestros productos</h2>
            <br>
            <p class="sub-titulo">Como líderes en innovación e investigación de Mercado, constantemente estamos creando nuevos usos lácteos, perfectos para cada propósito</p>
            <div class="cuadros-info cuadros-row-4">
                <a href="" class="cuadros-info-n">
                    <div class="img"><img src="{{ asset('/web/imagenes/img-cuadro-1.svg') }}" alt=""></div>
                    <div class="texto">
                        <h5>Título con una línea</h5>
                    </div>
                </a>

                <a href="" class="cuadros-info-n">
                    <div class="img"><img src="{{ asset('/web/imagenes/img-cuadro-2.svg') }}" alt=""></div>
                    <div class="texto">
                        <h5>Título con una línea</h5>
                    </div>
                </a>

                <a href="" class="cuadros-info-n">
                    <div class="img"><img src="{{ asset('/web/imagenes/img-cuadro-1.svg') }}" alt=""></div>
                    <div class="texto">
                        <h5>Título con una línea</h5>
                    </div>
                </a>

                <a href="" class="cuadros-info-n ocultar-576">
                    <div class="img"><img src="{{ asset('/web/imagenes/img-cuadro-2.svg') }}" alt=""></div>
                    <div class="texto">
                        <h5>Título con una línea</h5>
                    </div>
                </a>
            </div>
            <a href="/productos" class="boton bg-red">Ver todos los productos</a>
        </section>

        <section class="seccion-home">
            <h2>Mira estas recetas</h2>
            <br>
            <p class="sub-titulo">Como líderes en innovación e investigación de Mercado, constantemente estamos creando nuevos usos lácteos, perfectos para cada propósito</p>
            <div class="cuadros-info cuadros-row-3">
                <a href="" class="cuadros-info-n">
                    <div class="img"><img src="{{ asset('/web/imagenes/img-cuadro-3.svg') }}" alt=""></div>
                    <div class="texto">
                        <h5>Título con una línea</h5>
                    </div>
                </a>

                <a href="" class="cuadros-info-n">
                    <div class="img"><img src="{{ asset('/web/imagenes/img-cuadro-3.svg') }}" alt=""></div>
                    <div class="texto">
                        <h5>Título con una línea</h5>
                    </div>
                </a>

                <a href="" class="cuadros-info-n ocultar-576">
                    <div class="img"><img src="{{ asset('/web/imagenes/img-cuadro-3.svg') }}" alt=""></div>
                    <div class="texto">
                        <h5>Título con una línea</h5>
                    </div>
                </a>
            </div>
            <a href="/nuestras-recetas" class="boton bg-red">Ver todas las recetas</a>
        </section>


        <section class="seccion-home">
            <h2>Tendencias y Noticias</h2>
            <br>
            <p class="sub-titulo">Como líderes en innovación e investigación de Mercado, constantemente estamos creando nuevos usos lácteos, perfectos para cada propósito</p>
            <div class="cuadros-info cuadros-row-3">
                <a href="" class="cuadros-info-n">
                    <div class="img"><img src="{{ asset('/web/imagenes/img-cuadro-3.svg') }}" alt=""></div>
                    <div class="texto">
                        <h5>Título con una línea</h5>
                    </div>
                </a>

                <a href="" class="cuadros-info-n">
                    <div class="img"><img src="{{ asset('/web/imagenes/img-cuadro-3.svg') }}" alt=""></div>
                    <div class="texto">
                        <h5>Título con una línea</h5>
                    </div>
                </a>

                <a href="" class="cuadros-info-n ocultar-576">
                    <div class="img"><img src="{{ asset('/web/imagenes/img-cuadro-3.svg') }}" alt=""></div>
                    <div class="texto">
                        <h5>Título con una línea</h5>
                    </div>
                </a>
            </div>
            <a href="/noticias-tendencias" class="boton bg-red">Ver todas las noticias</a>
            
        </section>
        {{-- Conocenos Escritorio --}}
        <section class="conocenos mostrar-1920">
            <div class="concenos-txt">
                <div></div>
                <div>
                    <h3>Conócenos</h3>
                    <p>Soprole Food Professionals es la marca industrial de Soprole. Nosotros creamos productos sanos y ricos, y entregamos soluciones de alta calidad, diseñadas para cada propósito de nuestros clientes.</p>
                </div>
            </div>
            <div class="concenos-img-txt">
                <div>
                    <div class="img"><img src="{{ asset('/web/imagenes/img-circulo2.svg') }}" alt=""></div>
                </div>
                <div>
                    <p>Nosotros somos expertos en la industria láctea y entendemos el rol fundamental que juega en tu cocina. El sabor, textura y apariencia en los platos que entregan los productos lácteos, son clave para entregar calidad a los miles de consumidores que se atienden día a día.</p>
                    <br>
                    <p> En Soprole Food Professionals, trabajamos en conjunto con nuestros clientes, en sus negocios, compartiendo ideas y formas de trabajo de manera permanente. Nos concentramos en esas preparaciones, en que los lácteos son el factor diferenciador, y que son el motivo por el que los consumidores entran a esa pastelería, pizzería, restaurante o cafeteria.</p>
                    <a href="/conocenos" class="boton-conocenos">Ver más sobre nosotros</a>
                </div>
            </div>
        </section>
        {{-- Conocenos Movil --}}
        <section class="conocenos mostrar-1100">
            <div class="concenos-img-txt">
                <div>
                    <div class="img"><img src="{{ asset('/web/imagenes/img-circulo2.svg') }}" alt=""></div>
                </div>
                <div class="conocenos-txt">
                    <h3>Conócenos</h3>
                    <p>Soprole Food Professionals es la marca industrial de Soprole. Nosotros creamos productos sanos y ricos, y entregamos soluciones de alta calidad, diseñadas para cada propósito de nuestros clientes.</p>
                    <br>
                    <p>Nosotros somos expertos en la industria láctea y entendemos el rol fundamental que juega en tu cocina. El sabor, textura y apariencia en los platos que entregan los productos lácteos, son clave para entregar calidad a los miles de consumidores que se atienden día a día.</p>
                    <br>
                    <p> En Soprole Food Professionals, trabajamos en conjunto con nuestros clientes, en sus negocios, compartiendo ideas y formas de trabajo de manera permanente. Nos concentramos en esas preparaciones, en que los lácteos son el factor diferenciador, y que son el motivo por el que los consumidores entran a esa pastelería, pizzería, restaurante o cafeteria.</p>
                    <a href="/conocenos" class="boton-conocenos">Ver más sobre nosotros</a>
                </div>
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
