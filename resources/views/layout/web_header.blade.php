<header>
    {{-- Modal ir a tienda --}}
    <div class="flex-modal-tienda">
        <div class="modal-tienda">
            @php
                $modal = App\Http\Controllers\Management\EditableController::listarByTipo(5);
            @endphp
            @if (isset($modal->edi_video))
                <iframe src="https://www.youtube.com/embed/{{ GetYoutubeID($modal->edi_video) }}" title="YouTube video player" frameborder="0"></iframe>
                @php
                    echo $modal->edi_contenido;
                @endphp
            @else
                <iframe src="https://www.youtube.com/embed/jsyySdF-fQg" title="YouTube video player"
                    frameborder="0"></iframe>
            @endif
            <h5>Estás a punto de salir de este sitio para ir a la tienda. ¿Confirmas esto?</h5>
            <div class="botones-tienda">
                <a class="btn-ir-tienda no-ir cerrar-modal">No, quiero quedarme aquí </a>
                <a href="https://www.soprolecontigo.cl/" class="btn-ir-tienda" target="_blank">Sí, quiero ir a la
                    tienda</a>
            </div>
        </div>
    </div>
    {{-- Menu escritorio --}}
    <div class="flex-menu">
        <div class="menu">
            <div class="rrss-header">
                @php
                    $facebook = App\Http\Controllers\Management\ConfiguracionController::listarByTipo('facebook');
                    $instagram = App\Http\Controllers\Management\ConfiguracionController::listarByTipo('instagram');
                @endphp
                <a href="{{isset($instagram->con_link) ? $instagram->con_link : ''}}" target="_blank"><img src="{{ asset('/public/web/imagenes/i-insta-azul.svg') }}" alt=""></a>
                <a href="{{isset($facebook->con_link) ? $facebook->con_link : ''}}" target="_blank"><img src="{{ asset('/public/web/imagenes/i-facebook-azul.svg') }}" alt=""></a>
                <a href="https://www.soprole.cl/" target="_blank"><img src="{{ asset('/public/web/imagenes/i-soprole.svg') }}" alt=""></a>

            </div>
            <div class="menu-op">
                <div class="dropdown-menu-header">
                    <a href="{{ route('web.conocenos') }}" class="dropbtn">Conócenos</a>
                </div>

                <div class="dropdown-menu-header dropdown-noticias">
                    <a class="dropbtn" href="{{route('web.academia.index')}}">Academia</a>
                    <div class="dropdown-content dropdown-content-noticias">
                        <div class="contenido-drop contenido-drop-noticias">
                            <div>
                                <div class="titulo-drop">
                                    <h5>Academia</h5>
                                    <a href="{{route('web.academia.index')}}" class="boton-ver-op bg-red">Ver todos</a>
                                </div>

                                @foreach (App\Http\Controllers\Management\SegmentoController::listarWithProducto() as $item)
                                    <a href="{{route('web.academia.index').'?segmentoId[0]='.$item->seg_id}}" class="opcion-drop-n"
                                        onmouseover="this.style='background-color:{{ $item->seg_color }};';"
                                        onmouseout="this.style='background-color:white';">
                                        <img style="width: 36px;" src="{{ $item->seg_imagen }}" alt="">
                                        <p style="color: {{ $item->seg_color_texto }}">{{ $item->seg_nombre }}</p>
                                    </a>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>

                <div class="dropdown-menu-header">
                    <a class="dropbtn" href="/productos">Productos</a>
                    <div class="dropdown-content">
                        <div class="contenido-drop">
                            <div>
                                <div class="titulo-drop">
                                    <h5>Segmentos</h5>
                                    <a href="/productos" class="boton-ver-op bg-red">Ver todos</a>
                                </div>

                                @foreach (App\Http\Controllers\Management\SegmentoController::listarWithProducto() as $item)
                                    <div class="opcion-drop-n"
                                    onclick="document.location.href='/productos/?segmentoId[0]={{$item->seg_id}}&page=1'"
                                        onmouseover="this.style='background-color:{{ $item->seg_color }};';"
                                        onmouseout="this.style='background-color:white';">
                                        <img style="width: 36px;" src="{{ $item->seg_imagen }}" alt="">
                                        <p style="color: {{ $item->seg_color_texto }}">{{ $item->seg_nombre }}</p>
                                        @if (count($item->productos) > 0)
                                            <img src="{{ asset('/public/web/imagenes/i-flecha-deracha-1.svg') }}"
                                                alt="">
                                            <div class="sub-content-drop ocultar-drop drop-default">
                                                <div class="titulo-drop">
                                                    <h5>Productos {{ $item->seg_nombre }}</h5>
                                                    <a href="/productos/?segmentoId[0]={{$item->seg_id}}&page=1" class="boton-ver-op bg-red">Ver mas</a>
                                                </div>
                                                @foreach ($item->productos as $producto)
                                                    <a href="/productos/detalle/{{ $producto->pro_url }}" class="link-op"
                                                        style="color: {{ $item->seg_color_texto }}">{{ $producto->pro_titulo }}</a>
                                                @endforeach
                                            </div>
                                        @endif
                                    </div>
                                @endforeach
                            </div>
                            <div class="linea-op-drop"></div>
                            <div></div>
                        </div>
                    </div>
                </div>

                <div class="dropdown-menu-header">
                    <a href="{{route('web.receta.index')}}" class="dropbtn">Recetas</a> 
                </div>

                <div class="dropdown-menu-header">
                    <a href="{{route('web.noticia.index')}}" class="dropbtn">Noticias y tendencias</a> 
                </div>
            </div>
            <div class="botones-header">
                <a class="tienda">
                    <img src="{{ asset('/public/web/imagenes/i-carro.svg') }}" alt="">
                    <p>Ir a la tienda</p>
                </a>
                <a href="/hazte-cliente" class="cliente">
                    <img src="{{ asset('/public/web/imagenes/i-user.svg') }}" alt="">
                    <p>Hazte cliente</p>
                </a>
            </div>
        </div>

        <div class="logo-txt">
            <a href="/"><img src="{{ asset('/public/web/imagenes/logo.svg') }}" alt=""></a>
            <div>
                <h2>Apasionados por el desarrollo de tu negocio gastronómico</h2>
            </div>
        </div>
    </div>
    {{-- Menu movil --}}
    <div class="flex-bar-menu-movil">
        <div class="bar-menu-movil">
            <a href="/"><img width="130px" src="{{ asset('/public/web/imagenes/logo.svg') }}"
                    alt=""></a>
            <div><img class="btn-hamburger" src="{{ asset('/public/web/imagenes/i-bar.svg') }}" alt=""></div>
        </div>
    </div>
    <div class="barra-menu-movil">
        <div class="flex-barra-menu-movil">
            <div class="close-menu-movil">
                <a href="https://www.soprole.cl/" target="_blank"><img style="width: 35px;"
                        src="{{ asset('/public/web/imagenes/i-soprole.svg') }}" alt=""></a>
                <div>
                    <img class="btn-close" src="{{ asset('/public/web/imagenes/i-close.svg') }}" alt="">
                </div>
            </div>
            <div class="opcion-barra-n">
                <a href="{{ route('web.conocenos') }}">Conócenos</a>
            </div>
            <div class="opcion-barra-n btn-noticias-movil">
                <a>Academia</a>
                <img src="{{ asset('/public/web/imagenes/i-flecha-white.svg') }}" alt="">
            </div>
            <div class="opcion-barra-n btn-productos-movil">
                <a>Productos</a>
                <img src="{{ asset('/public/web/imagenes/i-flecha-white.svg') }}" alt="">
            </div>
            <div class="opcion-barra-n">
                <a href="{{route('web.receta.index')}}">Recetas</a>
            </div>
            <div class="opcion-barra-n">
                <a href="{{route('web.noticia.index')}}">Noticias y Tendencias</a>
            </div>
            <br>
            <div class="opcion-barra-n tienda-movil otros-opcion-barra-n tienda">
                <img src="{{ asset('/public/web/imagenes/i-carro-2.svg') }}" alt="">
                <a>Ir a la tienda</a>
            </div>

            <div class="opcion-barra-n cliente-movil otros-opcion-barra-n">
                <img src="{{ asset('/public/web/imagenes/i-user-2.svg') }}" alt="">
                <a href="/hazte-cliente">Hazte cliente</a>
            </div>

        </div>
    </div>
    {{-- sub menu Segmentos-productos --}}
    <div class="barra-productos-movil">
        <div class="flex-barra-menu-movil">
            <div class="titulo-drop">
                <h5>Segmentos</h5>
                <a href="/productos" class="boton-ver-op bg-red">Ver mas</a>
            </div>

            @foreach (App\Http\Controllers\Management\SegmentoController::listarWithProducto() as $item)
                <div class="opcion-drop-n producto-lista btn-pasteleria-segmento" name="Segmentos"
                    id="{{ $item->seg_id }}" onmouseover="this.style='background-color:{{ $item->seg_color }};';"
                    onmouseout="this.style='background-color:white';">
                    <img style="width: 36px;" src="{{ $item->seg_imagen }}" alt="">
                    <p style="color: {{ $item->seg_color_texto }}">{{ $item->seg_nombre }}</p>
                    @if (count($item->productos) > 0)
                        <img src="{{ asset('/public/web/imagenes/i-flecha-deracha-1.svg') }}" alt="">
                    @endif
                </div>
            @endforeach

            <div class="flex-volver-movil">
                <div class="volver-movil">Volver</div>
            </div>
        </div>
    </div>

    {{-- sub menu productos --}}
    <div class="barra-productos-lista-movil">
        <div class="flex-barra-menu-movil">
            <div class="titulo-drop">
                <h5>Produtos</h5>
                <a href="" class="boton-ver-op bg-red">Ver mas</a>
            </div>
            @foreach (App\Http\Controllers\Management\SegmentoController::listarWithProducto() as $item)
                <div class="producto-lista-pasteleria ocultar-producto-lista" name="SegmentoProductos"
                    id="div_SegmentoProductos{{ $item->seg_id }}">
                    @if (count($item->productos) > 0)
                        @foreach ($item->productos as $producto)
                            <div class="opcion-drop-n-2"
                                onmouseover="this.style='background-color:{{ $item->seg_color }};';"
                                onmouseout="this.style='background-color:white';">
                                <p style="color: {{ $item->seg_color_texto }}">{{ $producto->pro_titulo }}
                                </p>
                            </div>
                        @endforeach
                    @endif
                </div>
            @endforeach

            <div class="flex-volver-movil">
                <div class="volver-movil2">Volver</div>
            </div>

        </div>
    </div>

    {{-- Submenu Academia --}}
    <div class="barra-noticias-movil">
        <div class="flex-barra-menu-movil">
            <div class="titulo-drop">
                <h5>Academia</h5>
                <a href="{{route('web.academia.index')}}" class="boton-ver-op bg-red">Ver mas</a>
            </div>

            @foreach (App\Http\Controllers\Management\SegmentoController::listarWithProducto() as $item)
                <a href="{{route('web.academia.index').'?segmentoId[0]='.$item->seg_id}}" class="opcion-drop-n"
                    onmouseover="this.style='background-color:{{ $item->seg_color }};';"
                    onmouseout="this.style='background-color:white';">
                    <img style="width: 36px;" src="{{ $item->seg_imagen }}" alt="">
                    <p style="color: {{ $item->seg_color_texto }}">{{ $item->seg_nombre }}</p>
                </a>
            @endforeach

            <div class="flex-volver-movil">
                <div class="volver-movil">Volver</div>
            </div>
        </div>
    </div>
    </div>
</header>
<script>
    // menú responsivo, al seleccionar segmento desplegar los productos

    var Segmentos = document.getElementsByName("Segmentos"),
        len_Segmentos = Segmentos.length,
        i;

    var SegmentoProductos = {!! json_encode(App\Http\Controllers\Management\SegmentoController::listarWithProducto()) !!}
    for (i = 0; i < len_Segmentos; i += 1) {
        Segmentos[i].onclick = click_SegmentoProductos;
    }

    function click_SegmentoProductos() {
        SegmentoProductos.forEach((SegmentoProducto, i) => {
            if (SegmentoProducto.seg_id == this.id) {
                var y = document.getElementById("div_SegmentoProductos" + this.id);
                y.style.display = "block";
            } else {
                var y = document.getElementById("div_SegmentoProductos" + SegmentoProducto.seg_id);
                y.style.display = "none";
            }
        });
    }
</script>
