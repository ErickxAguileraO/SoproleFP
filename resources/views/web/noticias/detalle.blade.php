@extends('layout.web')

@section('title', 'Noticias y tendencias')

@section('content')
    @push('extra-css')
    @endpush
    <div class="portada">
        <img class="ocultar-movil" src="{{ asset('/public/web/imagenes/portada-tendencia-escritorio.svg') }}" alt="">
        <img class="ocultar-escritorio" src="{{ asset('/public/web/imagenes/portada-tendencia-movil.svg') }}" alt="">
    </div>
    <div class="contenido">
        <section class="detalle-noticia-tendencia">
            <h4>Esta es la bajada</h4>
            <span>02/01/2023</span>
            <div>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                <br>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                <br>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
            </div>
            
            <h2>Galería de imágenes</h2>
            <div class="galeria-img">
                <a href="{{ asset('/public/web/imagenes/galeria-1.svg') }}" class="fresco"><img src="{{ asset('/public/web/imagenes/galeria-1.svg') }}" alt=""></a>
                <a href="{{ asset('/public/web/imagenes/galeria-2.svg') }}" class="fresco"><img src="{{ asset('/public/web/imagenes/galeria-2.svg') }}" alt=""></a>
                <a href="{{ asset('/public/web/imagenes/galeria-1.svg') }}" class="fresco"><img src="{{ asset('/public/web/imagenes/galeria-1.svg') }}" alt=""></a>
                <a href="{{ asset('/public/web/imagenes/galeria-2.svg') }}" class="fresco"><img src="{{ asset('/public/web/imagenes/galeria-2.svg') }}" alt=""></a>
                <a href="{{ asset('/public/web/imagenes/galeria-1.svg') }}" class="fresco"><img src="{{ asset('/public/web/imagenes/galeria-1.svg') }}" alt=""></a>
                <a href="{{ asset('/public/web/imagenes/galeria-2.svg') }}" class="fresco"><img src="{{ asset('/public/web/imagenes/galeria-2.svg') }}" alt=""></a>
            </div>
            <div class="flex-ver-mas-galeria">
                <a href="" class="ver-mas-galeria">Ver más fotos</a>
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
