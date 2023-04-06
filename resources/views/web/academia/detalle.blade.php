@extends('layout.web')

@section('title', 'Detalle academia')

@section('content')
    @push('extra-css')
    @endpush
    <div class="portada">
        <img class="ocultar-movil" src="{{ asset('/public/web/imagenes/portada-academia-escritorio.svg') }}" alt="">
        <img class="ocultar-escritorio" src="{{ asset('/public/web/imagenes/portada-academia-movil.svg') }}" alt="">
    </div>
    <div class="contenido">
        <section class="detalle-noticia-tendencia">
            <h1 class="txt-portada-2">{{$academia->aca_titulo}}</h1>
            <div class="video-academia">
                <iframe src="https://www.youtube.com/embed/{{ GetYoutubeID($academia->aca_video) }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>            
            </div>
            <h4>{{$academia->aca_titulo2}}</h4>
            <span>{{$academia->aca_fecha}}</span>
            <div>
                @php
                    echo $academia->aca_contenido;
                @endphp
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
