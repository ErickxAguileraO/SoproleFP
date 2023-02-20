@extends('layout.web')

@section('title', 'Noticias y tendencias')

@section('content')
    @push('extra-css')
    <style>
        .seccion-home {
            padding-top: 0px;
        }
    </style>
    @endpush
    <div class="contenido">
        <div class="flexslider-seccion">
            <ul class="slides">
                <!-- 1 -->
                <li style=" z-index:0; opacity: 1;" class="li-slider">
                    <img class="ocultar-movil" src="{{ asset('/public/web/imagenes/portada-noticias-escritorio.svg') }}" alt="">
                    <img class="ocultar-escritorio" src="{{ asset('/public/web/imagenes/portada-noticias-movil.svg') }}" alt="">
                </li>
    
                <!-- 2 -->
                <li style=" z-index:0; opacity: 1;" class="li-slider">
                    <img class="ocultar-movil" src="{{ asset('/public/web/imagenes/portada-noticias-escritorio.svg') }}" alt="">
                    <img class="ocultar-escritorio" src="{{ asset('/public/web/imagenes/portada-noticias-movil.svg') }}" alt="">
                </li>
    
                <!-- 3 -->
                <li style=" z-index:0; opacity: 1;" class="li-slider">
                    <img class="ocultar-movil" src="{{ asset('/public/web/imagenes/portada-noticias-escritorio.svg') }}" alt="">
                    <img class="ocultar-escritorio" src="{{ asset('/public/web/imagenes/portada-noticias-movil.svg') }}" alt="">
                </li>
            </ul>
        </div>
        <br>
        <br>
        <section class="filtros">
            <div class="select-filtros" style="margin-bottom: 50px;">
                <div>
                    <label for="">Segmento</label>
                    <select name="" id="">
                        <option value="0">Todos</option>
                        @foreach ($segmentos as $item)
                            <option value="{{$item->seg_id}}">{{$item->seg_nombre}}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <a href="" style="color: #1362B6;">Limpiar filtros</a>
                </div>
            </div>
        </section>
        <section class="seccion-home">
            <div class="cuadros-info cuadros-row-3">
                @foreach ($noticias as $item)
                    <div class="cuadros-info-n noticia-tendencia">
                        <div class="img"><img src="{{ isset($item->imagenes[0]->ino_imagen) ? asset($item->imagenes[0]->ino_imagen) : NULL }}" alt=""></div>
                        <div class="texto">
                            <div>
                                <h5>{{$item->not_titulo}}</h5>
                                <span>{{$item->not_fecha}}</span>
                                <p>{{$item->not_titulo2}}</p>                  
                            </div>
                            
                            <a href="{{route('webnoticia.detalle', $item->not_id)}}" class="boton-noticia-tendencia">Ver</a>
                        </div>
                    </div>
                @endforeach
            </div>
            {{ $noticias->links() }}
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
