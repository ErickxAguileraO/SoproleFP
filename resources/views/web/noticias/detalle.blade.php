@extends('layout.web')

@section('title', 'Noticias y tendencias')

@section('content')
    @push('extra-css')
    @endpush
    <div class="portada">
        <img class="ocultar-movil" height="360" src="{{ isset($noticia->imagenes[0]->ino_imagen) ? asset($noticia->imagenes[0]->ino_imagen) : NULL }}" alt="">
        <img class="ocultar-escritorio"  height="360" src="{{ isset($noticia->imagenes[0]->ino_imagen) ? asset($noticia->imagenes[0]->ino_imagen) : NULL }} }}" alt="">
        {{-- <img class="ocultar-movil" src="{{ asset('/public/web/imagenes/portada-tendencia-escritorio.svg') }}" alt="">
        <img class="ocultar-escritorio" src="{{ asset('/public/web/imagenes/portada-tendencia-movil.svg') }}" alt=""> --}}
        <h1 class="txt-portada">Insertar titulo de academia</h1>
    </div>
    <div class="contenido">
        <section class="detalle-noticia-tendencia">
            <h4>{{$noticia->not_titulo2}}</h4>
            <span>{{$noticia->not_fecha}}</span>
            <div>
                @php
                    echo $noticia->not_contenido;
                @endphp
            </div>
            
            <h2>Galería de imágenes</h2>
            <div class="galeria-img">
                @foreach ($noticia->imagenes as $item)
                    <a href="{{ asset($item->ino_imagen) }}" class="fresco"><img src="{{ asset($item->ino_imagen) }}" alt=""></a>
                @endforeach
            </div>
            {{-- <div class="flex-ver-mas-galeria">
                <a href="" class="ver-mas-galeria">Ver más fotos</a>
            </div> --}}
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
