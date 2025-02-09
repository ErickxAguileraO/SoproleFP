@extends('layout.web')

@section('title', 'Detalle receta')

@section('content')
    @push('extra-css')
    @endpush
    <div class="contenido">
        <div class="vista-previa-producto-receta">
            <div class="vista-previa">
                <div class="img-principal">
                    <img class="main_img"
                        src="{{ isset($receta->imagenes[0]->ire_imagen) ? asset($receta->imagenes[0]->ire_imagen) : asset($receta->rec_imagen) }}"
                        alt="">
                </div>
                @if (count($receta->imagenes) >= 6)
                    <div class="carruselImagenes thumbnail_container">
                        @foreach ($receta->imagenes as $item)
                            <div class="active imagen-n"><img class="thumbnail" src="{{ asset($item->ire_imagen) }}"
                                    alt=""></div>
                        @endforeach
                    </div>
                @else
                    <div class="flex-wrap-6 thumbnail_container">
                        @foreach ($receta->imagenes as $item)
                            <div class="active imagen-n"><img class="thumbnail" src="{{ asset($item->ire_imagen) }}"
                                    alt=""></div>
                        @endforeach
                    </div>
                @endif

            </div>
            <div class="txt-detalle-info">
                <div class="titulo-receta">
                    <h2 style="margin-right: 30px;">{{ $receta->rec_titulo }}</h2>
                    <div class="dificultad">
                        <p>Dificultad de la receta</p>
                        @if ($receta->rec_dificultad == 1)
                            <div class="facil">
                                <p>Fácil</p>
                            </div>
                        @endif
                        @if ($receta->rec_dificultad == 2)
                            <div class="intermedia">
                                <p>Intermedia</p>
                            </div>
                        @endif
                        @if ($receta->rec_dificultad == 3)
                            <div class="dificil">
                                <p>Difícil</p>
                            </div>
                        @endif
                    </div>
                </div>
                <br>
                <h6>Descripción</h6>
                @php
                    echo $receta->rec_contenido;
                @endphp
                <br>
                <div class="ingredientes-porciones">
                    <div>
                        <h6>Ingredientes</h6>
                        @php
                            echo $receta->rec_ingredientes;
                        @endphp
                    </div>
                    <div class="porciones">
                        <h6>Porciones</h6>
                        @php
                            echo $receta->rec_porciones;
                        @endphp
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <section style="width: 90%;">
            <h6>Preparación</h6>
            @php
                echo $receta->rec_preparacion;
            @endphp
        </section>

        @if ($receta->rec_video)
            <section class="video-conocenos">
                <h2>Tutorial</h2>
                <iframe src="https://www.youtube.com/embed/{{ GetYoutubeID($receta->rec_video) }}"
                    title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
            </section>
        @endif

        <section class="slider-recetas">
            <h4>Para preparar esto necesitas</h4>


            @if (count($receta->Producto) > 4)
                <div class="carruselRecetas">
                    @foreach ($receta->Producto as $item)
                        <a href="/productos/detalle/{{ $item->pro_url }}" class="cuadros-info-n">
                            <div class="img"><img src="{{ $item->pro_imagen }}" alt=""></div>
                            <div class="texto">
                                <h5>{{ $item->pro_titulo }}</h5>
                            </div>
                        </a>
                    @endforeach
                </div>
            @else
                <div class="cuadros-info flex-wrap-4">
                    @foreach ($receta->Producto as $pro)
                        <a href="/productos/detalle/{{ $pro->pro_url }}"class="cuadros-info-n">
                            <div class="img"><img src="{{ asset($pro->pro_imagen) }}" alt=""></div>
                            <div class="texto">
                                <h5>{{ $pro->pro_titulo }}</h5>
                            </div>
                        </a>
                    @endforeach
                </div>
            @endif
        </section>
    </div>

    @push('extra-js')
        <script>
            // Flex Slider
            $(document).ready(function() {
                $('.flexslider-seccion').flexslider({
                    animation: "slide",
                });
            });
        </script>
    @endpush

@endsection
