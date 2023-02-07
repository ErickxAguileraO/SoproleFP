@extends('layout.web')

@section('title', 'Noticias y tendencias')

@section('content')
    @push('extra-css')
    @endpush
    <div class="contenido">
        <div class="flexslider-seccion">
            <ul class="slides">
                <!-- 1 -->
                <li style=" z-index:0; opacity: 1;" class="li-slider">
                    <img class="ocultar-movil" src="{{ asset('/web/imagenes/portada-noticias-escritorio.svg') }}" alt="">
                    <img class="ocultar-escritorio" src="{{ asset('/web/imagenes/portada-noticias-movil.svg') }}" alt="">
                </li>
    
                <!-- 2 -->
                <li style=" z-index:0; opacity: 1;" class="li-slider">
                    <img class="ocultar-movil" src="{{ asset('/web/imagenes/portada-noticias-escritorio.svg') }}" alt="">
                    <img class="ocultar-escritorio" src="{{ asset('/web/imagenes/portada-noticias-movil.svg') }}" alt="">
                </li>
    
                <!-- 3 -->
                <li style=" z-index:0; opacity: 1;" class="li-slider">
                    <img class="ocultar-movil" src="{{ asset('/web/imagenes/portada-noticias-escritorio.svg') }}" alt="">
                    <img class="ocultar-escritorio" src="{{ asset('/web/imagenes/portada-noticias-movil.svg') }}" alt="">
                </li>
            </ul>
        </div>
        <section class="seccion-home">
            <div class="cuadros-info cuadros-row-3">
                <div class="cuadros-info-n noticia-tendencia">
                    <div class="img"><img src="{{ asset('/web/imagenes/img-cuadro-3.svg') }}" alt=""></div>
                    <div class="texto">
                        <div>
                            <h5>Esta es la primera tendencia</h5>
                            <span>02/01/2023</span>
                            <p>Este es el texto de relleno de esta tarjeta. La idea es rellenar esto para hacernos una idea de cómo el texto se va a ver en esta parte de la tarjeta.</p>                  
                        </div>
                        
                        <a href="/detalle-noticia-tendencia" class="boton-noticia-tendencia">Ver</a>
                    </div>
                </div>

                <div class="cuadros-info-n noticia-tendencia">
                    <div class="img"><img src="{{ asset('/web/imagenes/img-cuadro-3.svg') }}" alt=""></div>
                    <div class="texto">
                        <div>
                            <h5>Segunda tendencia con un título un poco más largo</h5>
                            <span>02/01/2023</span>
                            <p>Este es el texto de relleno de esta tarjeta. La idea es rellenar esto para hacernos una idea de cómo el texto se va a ver en esta parte de la tarjeta.</p>
                        </div>
                        <a href="/detalle-noticia-tendencia" class="boton-noticia-tendencia">Ver</a>
                    </div>
                </div>

                <div class="cuadros-info-n noticia-tendencia">
                    <div class="img"><img src="{{ asset('/web/imagenes/img-cuadro-3.svg') }}" alt=""></div>
                    <div class="texto">
                        <div>
                            <h5>Este título es el tercero y más largo. La idea es que tenga tres líneas en de texto en el título</h5>
                            <span>02/01/2023</span>
                            <p>Este es el texto de relleno de esta tarjeta. La idea es rellenar esto para hacernos una idea de cómo el texto se va a ver en esta parte de la tarjeta.</p>
                        
                        </div>
                        <a href="/detalle-noticia-tendencia" class="boton-noticia-tendencia">Ver</a>
                    </div>
                </div>

                <div class="cuadros-info-n noticia-tendencia">
                    <div class="img"><img src="{{ asset('/web/imagenes/img-cuadro-3.svg') }}" alt=""></div>
                    <div class="texto">
                        <div>
                            <h5>Esta es la primera tendencia</h5>
                            <span>02/01/2023</span>
                            <p>Este es el texto de relleno de esta tarjeta. La idea es rellenar esto para hacernos una idea de cómo el texto se va a ver en esta parte de la tarjeta.</p>                  
                        </div>
                        
                        <a href="/detalle-noticia-tendencia" class="boton-noticia-tendencia">Ver</a>
                    </div>
                </div>

                <div class="cuadros-info-n noticia-tendencia">
                    <div class="img"><img src="{{ asset('/web/imagenes/img-cuadro-3.svg') }}" alt=""></div>
                    <div class="texto">
                        <div>
                            <h5>Segunda tendencia con un título un poco más largo</h5>
                            <span>02/01/2023</span>
                            <p>Este es el texto de relleno de esta tarjeta. La idea es rellenar esto para hacernos una idea de cómo el texto se va a ver en esta parte de la tarjeta.</p>
                        </div>
                        <a href="/detalle-noticia-tendencia" class="boton-noticia-tendencia">Ver</a>
                    </div>
                </div>

                <div class="cuadros-info-n noticia-tendencia">
                    <div class="img"><img src="{{ asset('/web/imagenes/img-cuadro-3.svg') }}" alt=""></div>
                    <div class="texto">
                        <div>
                            <h5>Este título es el tercero y más largo. La idea es que tenga tres líneas en de texto en el título</h5>
                            <span>02/01/2023</span>
                            <p>Este es el texto de relleno de esta tarjeta. La idea es rellenar esto para hacernos una idea de cómo el texto se va a ver en esta parte de la tarjeta.</p>
                        
                        </div>
                        <a href="/detalle-noticia-tendencia" class="boton-noticia-tendencia">Ver</a>
                    </div>
                </div>
            </div>

            <div class="numeros-pag">
                <a href="" class="numero-antes-despues"  style="margin-right: 35px">Anterior</a>
                <a href="" class="numero-antes-despues-movil"  style="margin-right: 35px"><img src="{{ asset('web/imagenes/i-antes.svg') }}" alt=""></a>
                <a href="" class="numero numero-seleccionado">1</a>
                <a href="" class="numero">2</a>
                <a href="" class="numero-antes-despues" style="margin-left: 35px">Siguiente</a>
                <a href="" class="numero-antes-despues-movil"  style="margin-left: 35px"><img src="{{ asset('web/imagenes/i-despues.svg') }}" alt=""></a>
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
