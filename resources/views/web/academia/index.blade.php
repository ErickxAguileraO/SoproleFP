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
                <div>
                    <label for="">Segmento</label>
                    <select name="" id="">
                        <option value="">Todos</option>
                        <option value="">value 1</option>
                    </select>
                </div>
            </div>
        </section>

        <section class="seccion-home seccion-listas">
            <div class="encabezado-titulo-btn">
                <h2>Pastelería</h2>
                <div>
                    <a href="" class="boton bg-blue ocultar-movil">Ver todos los productos</a>
                    <a href="" class="boton bg-blue ocultar-escritorio">Ver todos</a>
                </div>
            </div>
            <div class="cuadros-info cuadros-row-3">
                <div class="cuadros-info-n noticia-tendencia academia">
                    <div class="img"><iframe src="https://www.youtube.com/embed/jsyySdF-fQg?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></div>
                    <div class="texto">
                        <div>
                            <h5>Este es el título del video</h5>
                            <span>02/01/2023</span>
                            <p>Este es el texto de relleno de esta tarjeta. La idea es rellenar esto para hacernos una idea de cómo el texto se va a ver en esta parte de la tarjeta.</p>
                        
                        </div>
                        <a href="/detalle-noticia-tendencia" class="boton-noticia-tendencia">Ver ahora</a>
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
                        <a href="/detalle-noticia-tendencia" class="boton-noticia-tendencia">Ver ahora</a>
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
                        <a href="/detalle-noticia-tendencia" class="boton-noticia-tendencia">Ver ahora</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="seccion-home seccion-listas">
            <div class="encabezado-titulo-btn">
                <h2>Comida Italiana</h2>
                <div>
                    <a href="" class="boton bg-blue ocultar-movil">Ver todos los productos</a>
                    <a href="" class="boton bg-blue ocultar-escritorio">Ver todos</a>
                </div>
            </div>
            <div class="cuadros-info cuadros-row-3">
                <div class="cuadros-info-n noticia-tendencia academia">
                    <div class="img"><iframe src="https://www.youtube.com/embed/jsyySdF-fQg?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></div>
                    <div class="texto">
                        <div>
                            <h5>Este es el título del video</h5>
                            <span>02/01/2023</span>
                            <p>Este es el texto de relleno de esta tarjeta. La idea es rellenar esto para hacernos una idea de cómo el texto se va a ver en esta parte de la tarjeta.</p>
                        
                        </div>
                        <a href="/detalle-noticia-tendencia" class="boton-noticia-tendencia">Ver ahora</a>
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
                        <a href="/detalle-noticia-tendencia" class="boton-noticia-tendencia">Ver ahora</a>
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
                        <a href="/detalle-noticia-tendencia" class="boton-noticia-tendencia">Ver ahora</a>
                    </div>
                </div>
            </div>
        </section>

        <section class="seccion-home seccion-listas">
            <div class="encabezado-titulo-btn">
                <h2>Comida Rápida</h2>
                <div>
                    <a href="" class="boton bg-blue ocultar-movil">Ver todos los productos</a>
                    <a href="" class="boton bg-blue ocultar-escritorio">Ver todos</a>
                </div>
            </div>
            <div class="cuadros-info cuadros-row-3">
                <div class="cuadros-info-n noticia-tendencia academia">
                    <div class="img"><iframe src="https://www.youtube.com/embed/jsyySdF-fQg?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></div>
                    <div class="texto">
                        <div>
                            <h5>Este es el título del video</h5>
                            <span>02/01/2023</span>
                            <p>Este es el texto de relleno de esta tarjeta. La idea es rellenar esto para hacernos una idea de cómo el texto se va a ver en esta parte de la tarjeta.</p>
                        
                        </div>
                        <a href="/detalle-noticia-tendencia" class="boton-noticia-tendencia">Ver ahora</a>
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
                        <a href="/detalle-noticia-tendencia" class="boton-noticia-tendencia">Ver ahora</a>
                    </div>
                </div>
            </div>
        </section>


        <section class="seccion-home seccion-listas">
            <div class="encabezado-titulo-btn">
                <h2>Cafetería</h2>
                <div>
                    <a href="" class="boton bg-blue ocultar-movil">Ver todos los productos</a>
                    <a href="" class="boton bg-blue ocultar-escritorio">Ver todos</a>
                </div>
            </div>
            <div class="cuadros-info cuadros-row-3">
                <div class="cuadros-info-n noticia-tendencia academia">
                    <div class="img"><iframe src="https://www.youtube.com/embed/jsyySdF-fQg?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></div>
                    <div class="texto">
                        <div>
                            <h5>Este es el título del video</h5>
                            <span>02/01/2023</span>
                            <p>Este es el texto de relleno de esta tarjeta. La idea es rellenar esto para hacernos una idea de cómo el texto se va a ver en esta parte de la tarjeta.</p>
                        
                        </div>
                        <a href="/detalle-noticia-tendencia" class="boton-noticia-tendencia">Ver ahora</a>
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
                        <a href="/detalle-noticia-tendencia" class="boton-noticia-tendencia">Ver ahora</a>
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
                        <a href="/detalle-noticia-tendencia" class="boton-noticia-tendencia">Ver ahora</a>
                    </div>
                </div>
            </div>
        </section>


        <section class="seccion-home seccion-listas">
            <div class="encabezado-titulo-btn">
                <h2>Servicios de alimentación</h2>
                <div>
                    <a href="" class="boton bg-blue ocultar-movil">Ver todos los productos</a>
                    <a href="" class="boton bg-blue ocultar-escritorio">Ver todos</a>
                </div>
            </div>
            <div class="cuadros-info cuadros-row-3">
                <div class="cuadros-info-n noticia-tendencia academia">
                    <div class="img"><iframe src="https://www.youtube.com/embed/jsyySdF-fQg?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></div>
                    <div class="texto">
                        <div>
                            <h5>Este es el título del video</h5>
                            <span>02/01/2023</span>
                            <p>Este es el texto de relleno de esta tarjeta. La idea es rellenar esto para hacernos una idea de cómo el texto se va a ver en esta parte de la tarjeta.</p>
                        
                        </div>
                        <a href="/detalle-noticia-tendencia" class="boton-noticia-tendencia">Ver ahora</a>
                    </div>
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
