@extends('layout.web')

@section('title', 'Nuestras recetas')

@section('content')
    @push('extra-css')
    @endpush
    <div class="portada">
        <img class="ocultar-movil" src="{{ asset('/public/web/imagenes/portada-recetas-escritorio.svg') }}" alt="">
        <img class="ocultar-escritorio" src="{{ asset('/public/web/imagenes/portada-recetas-movil.svg') }}" alt="">
    </div>
    <div class="contenido">
        <section class="filtros">
            <div class="select-filtros">
                <div class="ocultar-nice-select div-filtro">
                    <label for="">Segmento</label>
                    <select class="selectpicker" multiple title="Seleccione Segmento" data-live-search="true">
                        <option>Segmento 1</option>
                        <option>Segmento 2</option>
                        <option>Segmento 3</option>
                    </select>
                </div>

                <div class="ocultar-nice-select div-filtro">
                    <label for="">Producto</label>
                    <select class="selectpicker" multiple title="Seleccione Producto" data-live-search="true">
                        <option>Producto 1</option>
                        <option>Producto 2</option>
                        <option>Producto 3</option>
                    </select>
                </div>
                <div class="div-filtro">
                    <label for="">Producto</label>
                    <select name="" id="">
                        <option value="">value 1</option>
                        <option value="">value 2</option>
                    </select>
                </div>
                <div>
                    <a href="" style="color: #1362B6;">Limpiar filtros</a>
                </div>
            </div>
            <h2 style="margin-top: 50px">Filtrado por: <p>Leche</p> </h2>
        </section>

        <section class="seccion-home seccion-listas">
            <div class="encabezado-titulo-btn">
                <h2>Pastelería</h2>
                <div>
                    <a href="" class="boton bg-blue ocultar-movil">Ver todas las recetas</a>
                    <a href="" class="boton bg-blue ocultar-escritorio">Ver todas</a>
                </div>
            </div>
            <div class="cuadros-info cuadros-row-4">
                <a href="/receta-detalle" class="cuadros-info-n">
                    <div class="img"><img src="{{ asset('/public/web/imagenes/img-cuadro-1.svg') }}" alt=""></div>
                    <div class="texto">
                        <h5>Título con una línea</h5>
                    </div>
                </a>

                <a href="/receta-detalle" class="cuadros-info-n">
                    <div class="img"><img src="{{ asset('/public/web/imagenes/img-cuadro-2.svg') }}" alt=""></div>
                    <div class="texto">
                        <h5>Título con una línea</h5>
                    </div>
                </a>

                <a href="/receta-detalle" class="cuadros-info-n">
                    <div class="img"><img src="{{ asset('/public/web/imagenes/img-cuadro-1.svg') }}" alt=""></div>
                    <div class="texto">
                        <h5>Título con una línea</h5>
                    </div>
                </a>

                <a href="/receta-detalle" class="cuadros-info-n">
                    <div class="img"><img src="{{ asset('/public/web/imagenes/img-cuadro-2.svg') }}" alt=""></div>
                    <div class="texto">
                        <h5>Título con una línea</h5>
                    </div>
                </a>

                <a href="/receta-detalle" class="cuadros-info-n">
                    <div class="img"><img src="{{ asset('/public/web/imagenes/img-cuadro-1.svg') }}" alt=""></div>
                    <div class="texto">
                        <h5>Título con una línea</h5>
                    </div>
                </a>

                <a href="/receta-detalle" class="cuadros-info-n">
                    <div class="img"><img src="{{ asset('/public/web/imagenes/img-cuadro-2.svg') }}" alt=""></div>
                    <div class="texto">
                        <h5>Título con una línea</h5>
                    </div>
                </a>

                <a href="/receta-detalle" class="cuadros-info-n">
                    <div class="img"><img src="{{ asset('/public/web/imagenes/img-cuadro-1.svg') }}" alt=""></div>
                    <div class="texto">
                        <h5>Título con una línea</h5>
                    </div>
                </a>

                <a href="/receta-detalle" class="cuadros-info-n">
                    <div class="img"><img src="{{ asset('/public/web/imagenes/img-cuadro-2.svg') }}" alt=""></div>
                    <div class="texto">
                        <h5>Título con una línea</h5>
                    </div>
                </a>

                <a href="/receta-detalle" class="cuadros-info-n">
                    <div class="img"><img src="{{ asset('/public/web/imagenes/img-cuadro-1.svg') }}" alt=""></div>
                    <div class="texto">
                        <h5>Título con una línea</h5>
                    </div>
                </a>

                <a href="/receta-detalle" class="cuadros-info-n">
                    <div class="img"><img src="{{ asset('/public/web/imagenes/img-cuadro-2.svg') }}" alt=""></div>
                    <div class="texto">
                        <h5>Título con una línea</h5>
                    </div>
                </a>

                <a href="/receta-detalle" class="cuadros-info-n">
                    <div class="img"><img src="{{ asset('/public/web/imagenes/img-cuadro-1.svg') }}" alt=""></div>
                    <div class="texto">
                        <h5>Título con una línea</h5>
                    </div>
                </a>

                <a href="/receta-detalle" class="cuadros-info-n">
                    <div class="img"><img src="{{ asset('/public/web/imagenes/img-cuadro-2.svg') }}" alt=""></div>
                    <div class="texto">
                        <h5>Título con una línea</h5>
                    </div>
                </a>

                <a href="/receta-detalle" class="cuadros-info-n">
                    <div class="img"><img src="{{ asset('/public/web/imagenes/img-cuadro-1.svg') }}" alt=""></div>
                    <div class="texto">
                        <h5>Título con una línea</h5>
                    </div>
                </a>

                <a href="/receta-detalle" class="cuadros-info-n">
                    <div class="img"><img src="{{ asset('/public/web/imagenes/img-cuadro-2.svg') }}" alt=""></div>
                    <div class="texto">
                        <h5>Título con una línea</h5>
                    </div>
                </a>

                <a href="/receta-detalle" class="cuadros-info-n">
                    <div class="img"><img src="{{ asset('/public/web/imagenes/img-cuadro-1.svg') }}" alt=""></div>
                    <div class="texto">
                        <h5>Título con una línea</h5>
                    </div>
                </a>

                <a href="/receta-detalle" class="cuadros-info-n">
                    <div class="img"><img src="{{ asset('/public/web/imagenes/img-cuadro-2.svg') }}" alt=""></div>
                    <div class="texto">
                        <h5>Título con una línea</h5>
                    </div>
                </a>
            </div>
        </section>
        <div class="numeros-pag">
            <a href="" class="numero-antes-despues"  style="margin-right: 35px">Anterior</a>
            <a href="" class="numero-antes-despues-movil"  style="margin-right: 35px"><img src="{{ asset('web/imagenes/i-antes.svg') }}" alt=""></a>
            <a href="" class="numero numero-seleccionado">1</a>
            <a href="" class="numero">2</a>
            <a href="" class="numero-antes-despues" style="margin-left: 35px">Siguiente</a>
            <a href="" class="numero-antes-despues-movil"  style="margin-left: 35px"><img src="{{ asset('web/imagenes/i-despues.svg') }}" alt=""></a>
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
