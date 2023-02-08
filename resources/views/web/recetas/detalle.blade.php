@extends('layout.web')

@section('title', 'Detalle receta')

@section('content')
    @push('extra-css')
    @endpush
    <div class="contenido">
        <div class="vista-previa-producto-receta">
            <div class="vista-previa">
                <div class="img-principal">
                    <img class="main_img" src="{{ asset('/web/imagenes/portada-productos-escritorio.svg') }}" alt="">
                </div>        
                <div class="carruselImagenes thumbnail_container">
                    <div class="active imagen-n"><img class="thumbnail" src="{{ asset('/web/imagenes/portada-productos-escritorio.svg') }}" alt=""></div>
                    <div class="imagen-n"><img class="thumbnail" src="{{ asset('/web/imagenes/img-leche.svg') }}" alt=""></div>
                    <div class="imagen-n"><img class="thumbnail" src="{{ asset('/web/imagenes/portada-productos-escritorio.svg') }}" alt=""></div>
                    <div class="imagen-n"><img class="thumbnail" src="{{ asset('/web/imagenes/img-leche.svg') }}" alt=""></div>
                    <div class="imagen-n"><img class="thumbnail" src="{{ asset('/web/imagenes/portada-productos-escritorio.svg') }}" alt=""></div>
                    <div class="imagen-n"><img class="thumbnail" src="{{ asset('/web/imagenes/img-leche.svg') }}" alt=""></div>
                    <div class="imagen-n"><img class="thumbnail" src="{{ asset('/web/imagenes/portada-productos-escritorio.svg') }}" alt=""></div>
                    <div class="imagen-n"><img class="thumbnail" src="{{ asset('/web/imagenes/img-leche.svg') }}" alt=""></div>
                
                </div>
            </div>
            <div class="txt-detalle-info">
                <h2>Alfajores</h2>
                <br>
                <h6>Descripción</h6>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <br>
                <h6>Ingredientes</h6>
                <ul>
                    <li>Ingrediente 1</li>
                    <li>Ingrediente 2</li>
                    <li>Ingrediente 3</li>
                    <li>Ingrediente 4</li>

                </ul>
            </div>
        </div>
        <br>
        <br>
        <section style="width: 90%;">
            <h6>Preparación</h6>
            <br>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <br>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

        </section>
        
        <section class="video-conocenos">
            <h2>Tutorial</h2>
            <iframe src="https://www.youtube.com/embed/qoVEdea8N1k" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </section>
        
       <section class="slider-recetas">
            <h4>Recetas que puedes preparar con este producto</h4>
            <div class="carruselRecetas">
                <a href="" class="cuadros-info-n">
                    <div class="img"><img src="{{ asset('/web/imagenes/img-cuadro-2.svg') }}" alt=""></div>
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
                    <div class="img"><img src="{{ asset('/web/imagenes/img-cuadro-2.svg') }}" alt=""></div>
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
                    <div class="img"><img src="{{ asset('/web/imagenes/img-cuadro-2.svg') }}" alt=""></div>
                    <div class="texto">
                        <h5>Título con una línea</h5>
                    </div>
                </a>
                {{-- <a href="" style="width: auto; height: auto;" class="cuadros-info-n">
                    <div class="img"><img src="{{ asset('/web/imagenes/img-cuadro-2.svg') }}" alt=""></div>
                    <div class="texto">
                        <h5>Título con una línea</h5>
                    </div>
                </a> --}}

              
            
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
