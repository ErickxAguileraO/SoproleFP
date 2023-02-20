@extends('layout.web')

@section('title', 'Academia')

@section('content')
    @push('extra-css')
    @endpush
    <div class="portada">
        <img class="ocultar-movil" src="{{ asset('/public/web/imagenes/portada-academia-escritorio.svg') }}" alt="">
        <img class="ocultar-escritorio" src="{{ asset('/public/web/imagenes/portada-academia-movil.svg') }}" alt="">
    </div>
    <div class="contenido">
        <section class="filtros">
            <div class="select-filtros">
                <div class="div-filtro">
                    <label for="">Segmento</label>
                    <select name="" id="">
                        <option value="">Todos</option>
                        <option value="">value 1</option>
                    </select>
                </div>
                <div class="div-filtro">
                    <a href="" style="color: #1362B6;">Limpiar filtros</a>
                </div>
            </div>
        </section>

        <section class="seccion-home seccion-listas">
            <div class="cuadros-info cuadros-row-3">
                <div class="cuadros-info-n noticia-tendencia academia">
                    <div class="img"><iframe src="https://www.youtube.com/embed/jsyySdF-fQg?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></div>
                    <div class="texto">
                        <div>
                            <h5>Este es el título del video</h5>
                            <span>02/01/2023</span>
                            <p>Este es el texto de relleno de esta tarjeta. La idea es rellenar esto para hacernos una idea de cómo el texto se va a ver en esta parte de la tarjeta.</p>
                        
                        </div>
                        <a href="/academia/detalle" class="boton-noticia-tendencia">Ver ahora</a>
                    </div>
                </div>
                
                <div class="cuadros-info-n noticia-tendencia academia">
                    <div class="img"><iframe src="https://www.youtube.com/embed/jsyySdF-fQg?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></div>
                    <div class="texto">
                        <div>
                            <h5>Este es el título del video</h5>
                            <span>02/01/2023</span>
                            <p>Este es el texto de relleno de esta tarjeta. La idea es rellenar esto para hacernos una idea de cómo el texto se va a ver en esta parte de la tarjeta.</p>
                        
                        </div>
                        <a href="/academia/detalle" class="boton-noticia-tendencia">Ver ahora</a>
                    </div>
                </div>

                <div class="cuadros-info-n noticia-tendencia academia">
                    <div class="img"><iframe src="https://www.youtube.com/embed/jsyySdF-fQg?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></div>
                    <div class="texto">
                        <div>
                            <h5>Este es el título del video</h5>
                            <span>02/01/2023</span>
                            <p>Este es el texto de relleno de esta tarjeta. La idea es rellenar esto para hacernos una idea de cómo el texto se va a ver en esta parte de la tarjeta.</p>
                        
                        </div>
                        <a href="/academia/detalle" class="boton-noticia-tendencia">Ver ahora</a>
                    </div>
                </div>

                <div class="cuadros-info-n noticia-tendencia academia">
                    <div class="img"><iframe src="https://www.youtube.com/embed/jsyySdF-fQg?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></div>
                    <div class="texto">
                        <div>
                            <h5>Este es el título del video</h5>
                            <span>02/01/2023</span>
                            <p>Este es el texto de relleno de esta tarjeta. La idea es rellenar esto para hacernos una idea de cómo el texto se va a ver en esta parte de la tarjeta.</p>
                        
                        </div>
                        <a href="/academia/detalle" class="boton-noticia-tendencia">Ver ahora</a>
                    </div>
                </div>
                
                <div class="cuadros-info-n noticia-tendencia academia">
                    <div class="img"><iframe src="https://www.youtube.com/embed/jsyySdF-fQg?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></div>
                    <div class="texto">
                        <div>
                            <h5>Este es el título del video</h5>
                            <span>02/01/2023</span>
                            <p>Este es el texto de relleno de esta tarjeta. La idea es rellenar esto para hacernos una idea de cómo el texto se va a ver en esta parte de la tarjeta.</p>
                        
                        </div>
                        <a href="/academia/detalle" class="boton-noticia-tendencia">Ver ahora</a>
                    </div>
                </div>

                <div class="cuadros-info-n noticia-tendencia academia">
                    <div class="img"><iframe src="https://www.youtube.com/embed/jsyySdF-fQg?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></div>
                    <div class="texto">
                        <div>
                            <h5>Este es el título del video</h5>
                            <span>02/01/2023</span>
                            <p>Este es el texto de relleno de esta tarjeta. La idea es rellenar esto para hacernos una idea de cómo el texto se va a ver en esta parte de la tarjeta.</p>
                        
                        </div>
                        <a href="/academia/detalle" class="boton-noticia-tendencia">Ver ahora</a>
                    </div>
                </div>

                <div class="cuadros-info-n noticia-tendencia academia">
                    <div class="img"><iframe src="https://www.youtube.com/embed/jsyySdF-fQg?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></div>
                    <div class="texto">
                        <div>
                            <h5>Este es el título del video</h5>
                            <span>02/01/2023</span>
                            <p>Este es el texto de relleno de esta tarjeta. La idea es rellenar esto para hacernos una idea de cómo el texto se va a ver en esta parte de la tarjeta.</p>
                        
                        </div>
                        <a href="/academia/detalle" class="boton-noticia-tendencia">Ver ahora</a>
                    </div>
                </div>
                
                <div class="cuadros-info-n noticia-tendencia academia">
                    <div class="img"><iframe src="https://www.youtube.com/embed/jsyySdF-fQg?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></div>
                    <div class="texto">
                        <div>
                            <h5>Este es el título del video</h5>
                            <span>02/01/2023</span>
                            <p>Este es el texto de relleno de esta tarjeta. La idea es rellenar esto para hacernos una idea de cómo el texto se va a ver en esta parte de la tarjeta.</p>
                        
                        </div>
                        <a href="/academia/detalle" class="boton-noticia-tendencia">Ver ahora</a>
                    </div>
                </div>

                <div class="cuadros-info-n noticia-tendencia academia">
                    <div class="img"><iframe src="https://www.youtube.com/embed/jsyySdF-fQg?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></div>
                    <div class="texto">
                        <div>
                            <h5>Este es el título del video</h5>
                            <span>02/01/2023</span>
                            <p>Este es el texto de relleno de esta tarjeta. La idea es rellenar esto para hacernos una idea de cómo el texto se va a ver en esta parte de la tarjeta.</p>
                        
                        </div>
                        <a href="/academia/detalle" class="boton-noticia-tendencia">Ver ahora</a>
                    </div>
                </div>

                <div class="cuadros-info-n noticia-tendencia academia">
                    <div class="img"><iframe src="https://www.youtube.com/embed/jsyySdF-fQg?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></div>
                    <div class="texto">
                        <div>
                            <h5>Este es el título del video</h5>
                            <span>02/01/2023</span>
                            <p>Este es el texto de relleno de esta tarjeta. La idea es rellenar esto para hacernos una idea de cómo el texto se va a ver en esta parte de la tarjeta.</p>
                        
                        </div>
                        <a href="/academia/detalle" class="boton-noticia-tendencia">Ver ahora</a>
                    </div>
                </div>
                
                <div class="cuadros-info-n noticia-tendencia academia">
                    <div class="img"><iframe src="https://www.youtube.com/embed/jsyySdF-fQg?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></div>
                    <div class="texto">
                        <div>
                            <h5>Este es el título del video</h5>
                            <span>02/01/2023</span>
                            <p>Este es el texto de relleno de esta tarjeta. La idea es rellenar esto para hacernos una idea de cómo el texto se va a ver en esta parte de la tarjeta.</p>
                        
                        </div>
                        <a href="/academia/detalle" class="boton-noticia-tendencia">Ver ahora</a>
                    </div>
                </div>

                <div class="cuadros-info-n noticia-tendencia academia">
                    <div class="img"><iframe src="https://www.youtube.com/embed/jsyySdF-fQg?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></div>
                    <div class="texto">
                        <div>
                            <h5>Este es el título del video</h5>
                            <span>02/01/2023</span>
                            <p>Este es el texto de relleno de esta tarjeta. La idea es rellenar esto para hacernos una idea de cómo el texto se va a ver en esta parte de la tarjeta.</p>
                        
                        </div>
                        <a href="/academia/detalle" class="boton-noticia-tendencia">Ver ahora</a>
                    </div>
                </div>
            </div>
        </section>
        <div class="numeros-pag">
            <a href="" class="numero-antes-despues"  style="margin-right: 35px">Anterior</a>
            <a href="" class="numero-antes-despues-movil"  style="margin-right: 35px"><img src="{{ asset('web/imagenes/i-antes.svg') }}" alt=""></a>
            <a href="" class="numero numero-seleccionado">1</a>
            <a href="" class="numero">2</a>
            <a href="" class="numero-antes-despues" style="margin-left: 35px">Siguiente</a>
            <a href="" class="numero-antes-despues-movil"  style="margin-left: 35px"><img src="{{ asset('web/imagenes/i-despues.svg') }}" alt=""></a>
        </div>
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
