@extends('layout.web')

@section('title', 'Conocenos')

@section('content')
    @push('extra-css')
    @endpush
    <div class="portada">
        <img class="ocultar-movil" src="{{ asset('/public/web/imagenes/portada-conocenos-escritorio.svg') }}" alt="">
        <img class="ocultar-escritorio" src="{{ asset('/public/web/imagenes/portada-conocenos-movil.svg') }}" alt="">
    </div>
    <div class="contenido">
       <section class="proposito">
            <div>
                <h2>Propósito y su por qué</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et massa mi. Aliquam in hendrerit urna. Pellentesque sit amet sapien fringilla, mattis ligula consectetur, ultrices mauris. Maecenas vitae mattis tellus. Nullam quis imperdiet augue. Vestibulum auctor ornare leo, non suscipit magna interdum eu. Curabitur pellentesque nibh nibh, at maximus ante fermentum sit amet. Pellentesque commodo lacus at sodales sodales. Quisque sagittis orci ut diam condimentum, vel euismod erat placerat. In iaculis arcu eros, eget tempus orci facilisis id.</p>
                <br>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et massa mi. Aliquam in hendrerit urna. Pellentesque sit amet sapien fringilla, mattis ligula consectetur, ultrices mauris. Maecenas vitae mattis tellus. Nullam quis imperdiet augue. Vestibulum auctor ornare leo, non suscipit magna interdum eu. Curabitur pellentesque nibh nibh, at maximus ante fermentum sit amet. Pellentesque commodo lacus at sodales sodales. Quisque sagittis orci ut diam condimentum, vel euismod erat placerat. In iaculis arcu eros, eget tempus orci facilisis id.</p> 
            </div>
            <div class="flexslider-seccion">
                <ul class="slides slider-proposito">
                    <!-- 1 -->
                    <li style=" z-index:0; opacity: 1;" class="li-slider">
                        <img src="{{ asset('/public/web/imagenes/img-proposito.svg') }}" alt="">
                    </li>
        
                    <!-- 2 -->
                    <li style=" z-index:0; opacity: 1;" class="li-slider">
                        <img src="{{ asset('/public/web/imagenes/img-proposito.svg') }}" alt="">
                    </li>
        
                    <!-- 3 -->
                    <li style=" z-index:0; opacity: 1;" class="li-slider">
                        <img src="{{ asset('/public/web/imagenes/img-proposito.svg') }}" alt="">
                    </li>
                </ul>
            </div>
            {{-- <div>
                <img src="{{ asset('/web/imagenes/img-proposito.svg') }}" alt="">
            </div> --}}
       </section>

       <section class="video-conocenos">
            <iframe src="https://www.youtube.com/embed/qoVEdea8N1k" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
       </section>

       <section class="seccion-home">
            <h2>Nuestras alianzas</h2>
            <br>
            <p class="sub-titulo">Como líderes en innovación e investigación de Mercado, constantemente estamos creando nuevos usos lácteos, perfectos para cada propósito</p>
            <div class="alianzas-img">
                <img src="{{ asset('/public/web/imagenes/img-prueba.svg') }}" alt="">
                <img src="{{ asset('/public/web/imagenes/img-prueba.svg') }}" alt="">
                <img src="{{ asset('/public/web/imagenes/img-prueba.svg') }}" alt="">
                <img src="{{ asset('/public/web/imagenes/img-prueba.svg') }}" alt="">
                <img src="{{ asset('/public/web/imagenes/img-prueba.svg') }}" alt="">
                <img src="{{ asset('/public/web/imagenes/img-prueba.svg') }}" alt="">
                
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
