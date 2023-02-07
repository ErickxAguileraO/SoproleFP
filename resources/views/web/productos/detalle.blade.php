@extends('layout.web')

@section('title', 'Nuestros productos')

@section('content')
    @push('extra-css')
    @endpush
    <div class="contenido">
        <div class="vista-previa-producto-receta">
            <div class="vista-previa">
                <div class="img-principal">
                    <img class="main_img" src="{{ asset('/web/imagenes/portada-productos-escritorio.svg') }}" alt="">
                </div>        
                <div class="thumbnail_container">
                    <div class="active"><img class="thumbnail" src="{{ asset('/web/imagenes/portada-productos-escritorio.svg') }}" alt=""></div>
                    <div class=""><img class="thumbnail" src="{{ asset('/web/imagenes/img-leche.svg') }}" alt=""></div>
                    <div class=""><img class="thumbnail" src="{{ asset('/web/imagenes/portada-productos-escritorio.svg') }}" alt=""></div>
                    <div class=""><img class="thumbnail" src="{{ asset('/web/imagenes/img-leche.svg') }}" alt=""></div>
                    <div class=""><img class="thumbnail" src="{{ asset('/web/imagenes/portada-productos-escritorio.svg') }}" alt=""></div>

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
                    <p>ESTRELLAS</p>
                </div>
                <br>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
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
