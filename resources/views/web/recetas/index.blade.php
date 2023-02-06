@extends('layout.web')

@section('title', 'Nuestras recetas')

@section('content')
    @push('extra-css')
    @endpush
    <div class="portada">
        <img src="{{ asset('/web/imagenes/portada-recetas-escritorio.svg') }}" alt="">
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
                <div>
                    <label for="">Categoría</label>
                    <select name="" id="">
                        <option value="">value 1</option>
                        <option value="">value 2</option>
                    </select>
                </div>
            </div>
            
        </section>

        <section class="seccion-home seccion-listas">
            <div class="encabezado-titulo-btn">
                <h2>Pastelería</h2>
                <div>
                    <a href="" class="boton bg-blue">Ver todas las recetas</a>
                </div>
            </div>
            <div class="cuadros-info cuadros-row-4">
                <a href="" class="cuadros-info-n">
                    <div class="img"><img src="{{ asset('/web/imagenes/img-cuadro-1.svg') }}" alt=""></div>
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
                    <div class="img"><img src="{{ asset('/web/imagenes/img-cuadro-1.svg') }}" alt=""></div>
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
            </div>
        </section>

        <section class="seccion-home seccion-listas">
            <div class="encabezado-titulo-btn">
                <h2>Comida Italiana</h2>
                <div>
                    <a href="" class="boton bg-blue">Ver todas las recetas</a>
                </div>
            </div>
            <div class="cuadros-info cuadros-row-4">
                <a href="" class="cuadros-info-n">
                    <div class="img"><img src="{{ asset('/web/imagenes/img-cuadro-1.svg') }}" alt=""></div>
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
                    <div class="img"><img src="{{ asset('/web/imagenes/img-cuadro-1.svg') }}" alt=""></div>
                    <div class="texto">
                        <h5>Título con una línea</h5>
                    </div>
                </a>
            </div>
        </section>

        <section class="seccion-home seccion-listas">
            <div class="encabezado-titulo-btn">
                <h2>Comida Rápida</h2>
                <div>
                    <a href="" class="boton bg-blue">Ver todas las recetas</a>
                </div>
            </div>
            <div class="cuadros-info cuadros-row-4">
                <a href="" class="cuadros-info-n">
                    <div class="img"><img src="{{ asset('/web/imagenes/img-cuadro-1.svg') }}" alt=""></div>
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
                    <div class="img"><img src="{{ asset('/web/imagenes/img-cuadro-1.svg') }}" alt=""></div>
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
            </div>
        </section>

        <section class="seccion-home seccion-listas">
            <div class="encabezado-titulo-btn">
                <h2>Cafetería</h2>
                <div>
                    <a href="" class="boton bg-blue">Ver todas las recetas</a>
                </div>
            </div>
            <div class="cuadros-info cuadros-row-4">
                <a href="" class="cuadros-info-n">
                    <div class="img"><img src="{{ asset('/web/imagenes/img-cuadro-1.svg') }}" alt=""></div>
                    <div class="texto">
                        <h5>Título con una línea</h5>
                    </div>
                </a>
            </div>
        </section>

        <section class="seccion-home seccion-listas">
            <div class="encabezado-titulo-btn">
                <h2>Servicios de alimentación</h2>
                <div>
                    <a href="" class="boton bg-blue">Ver todas las recetas</a>
                </div>
            </div>
            <div class="cuadros-info cuadros-row-4">
                <a href="" class="cuadros-info-n">
                    <div class="img"><img src="{{ asset('/web/imagenes/img-cuadro-1.svg') }}" alt=""></div>
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
                    <div class="img"><img src="{{ asset('/web/imagenes/img-cuadro-1.svg') }}" alt=""></div>
                    <div class="texto">
                        <h5>Título con una línea</h5>
                    </div>
                </a>
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
