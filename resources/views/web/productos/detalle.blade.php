@extends('layout.web')

@section('title', 'Detalle producto')

@section('content')
    @push('extra-css')
    @endpush
    <div class="contenido">
        <div class="vista-previa-producto-receta">
            <div class="vista-previa">
                <div class="img-principal">
                    <img class="main_img" src="{{ asset('/public/web/imagenes/portada-productos-escritorio.svg') }}" alt="">
                </div>        
                <div class="carruselImagenes thumbnail_container">
                    <div class="active imagen-n"><img class="thumbnail" src="{{ asset('/public/web/imagenes/portada-productos-escritorio.svg') }}" alt=""></div>
                    <div class="imagen-n"><img class="thumbnail" src="{{ asset('/public/web/imagenes/img-leche.svg') }}" alt=""></div>
                    <div class="imagen-n"><img class="thumbnail" src="{{ asset('/public/web/imagenes/portada-productos-escritorio.svg') }}" alt=""></div>
                    <div class="imagen-n"><img class="thumbnail" src="{{ asset('/public/web/imagenes/img-leche.svg') }}" alt=""></div>
                    <div class="imagen-n"><img class="thumbnail" src="{{ asset('/public/web/imagenes/portada-productos-escritorio.svg') }}" alt=""></div>
                    <div class="imagen-n"><img class="thumbnail" src="{{ asset('/public/web/imagenes/img-leche.svg') }}" alt=""></div>
                    <div class="imagen-n"><img class="thumbnail" src="{{ asset('/public/web/imagenes/portada-productos-escritorio.svg') }}" alt=""></div>
                    <div class="imagen-n"><img class="thumbnail" src="{{ asset('/public/web/imagenes/img-leche.svg') }}" alt=""></div>
                
                </div>
            </div>
            <div class="txt-detalle-info">
                <div class="encabezado-detalle-info">
                    <h2>Leche Entera</h2>
                    <h3>1 litro</h3>
                    <div>
                      <p>SKU: 000030-001</p>
                    </div>
                </div>
                <div class="estrellas">
                    <img src="{{ asset('/public/web/imagenes/i-estrella.svg') }}" alt="">
                    <img src="{{ asset('/public/web/imagenes/i-estrella.svg') }}" alt="">
                    <img src="{{ asset('/public/web/imagenes/i-estrella.svg') }}" alt="">
                    <img src="{{ asset('/public/web/imagenes/i-estrella.svg') }}" alt="">
                    <img src="{{ asset('/public/web/imagenes/i-estrella.svg') }}" alt="">
                </div>
                <br>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <br>
                <h6>Conservación</h6>
                <p>Una vez abierto el envase su duración es de 4 días manteniéndolo refrigerado a 5º C</p>
                <br>
                <br>
                <div class="otros-detalles">
                    <div>
                        <h6>Vida últil</h6>
                        <p>180 días</p>
                    </div>

                    <div>
                        <h6>Unidades de venta</h6>
                        <p>Caja de 6 unidades</p>
                    </div>

                    <a href="" class="btn-ficha">
                        <p>Ver ficha técnica</p>
                        <img src="{{ asset('/public/web/imagenes/i-ficha.svg') }}" alt="">
                    </a>
                </div>
            </div>
        </div>
        <section class="slider-recetas">
            <h4>Recetas que puedes preparar con este producto</h4>
            <div class="carruselRecetas">
                <a href="" class="cuadros-info-n">
                    <div class="img"><img src="{{ asset('/public/web/imagenes/img-cuadro-2.svg') }}" alt=""></div>
                    <div class="texto">
                        <h5>Título con una línea</h5>
                    </div>
                </a>

                <a href="" class="cuadros-info-n">
                    <div class="img"><img src="{{ asset('/public/web/imagenes/img-cuadro-2.svg') }}" alt=""></div>
                    <div class="texto">
                        <h5>Título con una línea</h5>
                    </div>
                </a>

                <a href="" class="cuadros-info-n">
                    <div class="img"><img src="{{ asset('/public/web/imagenes/img-cuadro-2.svg') }}" alt=""></div>
                    <div class="texto">
                        <h5>Título con una línea</h5>
                    </div>
                </a>
                

                <a href="" class="cuadros-info-n">
                    <div class="img"><img src="{{ asset('/public/web/imagenes/img-cuadro-2.svg') }}" alt=""></div>
                    <div class="texto">
                        <h5>Título con una línea</h5>
                    </div>
                </a>

                <a href="" class="cuadros-info-n">
                    <div class="img"><img src="{{ asset('/public/web/imagenes/img-cuadro-2.svg') }}" alt=""></div>
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
