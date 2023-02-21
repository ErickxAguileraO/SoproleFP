@extends('layout.web')

@section('title', 'Detalle producto')

@section('content')
    @push('extra-css')
    @endpush
    <div class="contenido">
        <div class="vista-previa-producto-receta">
            <div class="vista-previa">
                <div id="product_viewer">
                    <img style="width: 36px;" src="{{ asset('/public/web/imagenes/i-360.svg') }}" alt="">

                </div>
            </div>
            <div class="txt-detalle-info">
                <div class="encabezado-detalle-info">
                    <h2>{{ $producto->pro_titulo }}</h2>
                    <h3>{{ $producto->pro_formato }}</h3>
                </div>
                <div>
                    <p>Código interno Soporle: {{ $producto->pro_sku }}</p>
                </div>
                <br>
                <p>
                    @php
                        echo $producto->pro_contenido;
                    @endphp
                </p>
                <br>
                <h6>Conservación</h6>
                <p> @php
                    echo $producto->pro_conservacion;
                @endphp</p>
                <br>
                <br>
                <div class="otros-detalles">
                    <div>
                        <h6>Vida últil</h6>
                        <p>{{ $producto->pro_vida_util }}</p>
                    </div>

                    <div>
                        <h6>Unidades de venta</h6>
                        <p>{{ $producto->pro_unidades_venta }}</p>
                    </div>

                    @if ($producto->pro_archivo)
                        <a target="_blank" href="{{ $producto->pro_archivo }}" class="btn-ficha">
                            <p>Ver ficha de producto</p>
                            <img src="{{ asset($producto->pro_archivo) }}" alt="">
                        </a>
                    @endif

                </div>
            </div>
        </div>
        @if (count($producto->RecetasWeb) > 0)
            <section class="slider-recetas">
                <h4>Recetas que puedes preparar con este producto</h4>
                <div class="carruselRecetas">
                    @foreach ($producto->RecetasWeb as $rec)
                        <a href="/receta/detalle/{{ $rec->rec_url }}" class="cuadros-info-n">
                            <div class="img"><img src="{{ asset($rec->rec_imagen) }}" alt=""></div>
                            <div class="texto">
                                <h5>{{ $rec->rec_titulo }}</h5>
                            </div>
                        </a>
                    @endforeach
                </div>
            </section>
        @endif
    </div>

    @push('extra-js')
        <script>
            $(document).ready(function() {
                $('.flexslider-seccion').flexslider({
                    animation: "slide",
                });
                var productViewer = new ProductViewer({
                    element: document.getElementById('product_viewer'),
                    imagePath: '/public/storage/imagenes/productos/{{ $producto->pro_id }}',
                    filePrefix: 'img',
                    fileExtension: '.jpg'
                });
            });
        </script>
    @endpush
@endsection
