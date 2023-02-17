<header>
    {{-- Modal ir a tienda --}}
    <div class="flex-modal-tienda">
        <div class="modal-tienda">
            <iframe src="https://www.youtube.com/embed/jsyySdF-fQg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, cum quod molestias id est harum quibusdam provident ut? Cum rerum possimus quam nesciunt porro animi laborum doloribus temporibus eum labore!</p>
            <h5>Estás a punto de salir de este sitio para ir a la tienda. ¿Confirmas esto?</h5>
            <div class="botones-tienda">
                <a class="btn-ir-tienda no-ir cerrar-modal">No, quiero quedarme aquí </a>
                <a href="https://www.soprolecontigo.cl/" class="btn-ir-tienda" target="_blank">Sí, quiero ir a la tienda</a>
            </div>
            
        </div>
    </div>
    {{-- Menu escritorio --}}
    <div class="flex-menu">
        <div class="menu">
            <div class="rrss-header">
                <a href=""><img src="{{ asset('/public/web/imagenes/i-insta-azul.svg') }}" alt=""></a>
                <a href=""><img src="{{ asset('/public/web/imagenes/i-facebook-azul.svg') }}" alt=""></a>
                <a href="https://www.soprole.cl/" target="_blank"><img src="{{ asset('/public/web/imagenes/i-soprole.svg') }}" alt=""></a>

            </div>
            <div class="menu-op">
                <div class="dropdown">
                    <a href="/conocenos" class="dropbtn">Conócenos</a> 
                </div>
                
                <div class="dropdown dropdown-noticias">
                    <a class="dropbtn">Academia</a> 
                    <div class="dropdown-content dropdown-content-noticias">
                        <div class="contenido-drop contenido-drop-noticias">
                           <div>
                                <div class="titulo-drop">
                                    <h5>Academia</h5>
                                    <a href="/academia" class="boton-ver-op bg-red">Ver todos</a>
                                </div>
                                @foreach (App\Http\Controllers\Management\AcademiaController::listar() as $item)
                                    <a href="/academia-detalle" class="opcion-drop-n btn-color-pasteleria">
                                        <img style="width: 36px;" src="{{ asset('/public/web/imagenes/i-pasteleria.svg') }}" alt="">
                                        <p class="color-pasteleria">{{$item->aca_titulo}}</p>
                                    </a>
                                @endforeach
                                {{-- <a href="/academia-detalle" class="opcion-drop-n btn-color-pasteleria">
                                    <img style="width: 36px;" src="{{ asset('/public/web/imagenes/i-pasteleria.svg') }}" alt="">
                                    <p class="color-pasteleria">Pastelería</p>
                                </a> --}}

                                {{-- <a href="/academia-detalle" class="opcion-drop-n btn-color-italiana">
                                    <img style="width: 36px;" src="{{ asset('/public/web/imagenes/i-citaliana.svg') }}" alt="">
                                    <p class="color-italiana">Comida Italiana</p>
                                </a> --}}

                                {{-- <a href="/academia-detalle" class="opcion-drop-n btn-color-rapida">
                                    <img style="width: 36px;" src="{{ asset('/public/web/imagenes/i-crapida.svg') }}" alt="">
                                    <p class="color-rapida">Comida Rápida</p>
                                </a> --}}

                                {{-- <a href="/academia-detalle" class="opcion-drop-n btn-color-cafeteria">
                                    <img style="width: 36px;" src="{{ asset('/public/web/imagenes/i-cafeteria.svg') }}" alt="">
                                    <p class="color-cafeteria">Cafetería</p>
                                </a> --}}

                                {{-- <a href="/academia-detalle" class="opcion-drop-n btn-color-servicios">
                                    <img style="width: 36px;" src="{{ asset('/public/web/imagenes/i-salimentacion.svg') }}" alt="">
                                    <p class="color-servicios">Servicios de alimentación</p>
                                </a> --}}
                           </div>
                        </div>
                    </div>
                </div>

                <div class="dropdown">
                    <a class="dropbtn">Productos</a> 
                    <div class="dropdown-content">
                        <div class="contenido-drop">
                           <div>
                                <div class="titulo-drop">
                                    <h5>Segmentos</h5>
                                    <a href="/productos" class="boton-ver-op bg-red">Ver todos</a>
                                </div>
                                
                                @foreach (App\Http\Controllers\Management\SegmentoController::listarWithProducto() as $item)
                                    <div class="opcion-drop-n btn-color-pasteleria">
                                        <img style="width: 36px;" src="{{ asset('/public/web/imagenes/i-pasteleria.svg') }}" alt="">
                                        <p class="color-pasteleria">{{$item->seg_nombre}}</p>
                                        @if (count($item->producto)>0)
                                            <img src="{{ asset('/public/web/imagenes/i-flecha-deracha-1.svg') }}" alt="">
                                            <div class="sub-content-drop ocultar-drop drop-default">
                                                <div class="titulo-drop">
                                                    <h5>Productos {{$item->seg_nombre}}</h5>
                                                    <a href="" class="boton-ver-op bg-red">Ver mas</a>
                                                </div>
                                                @foreach ($item->producto as $producto)
                                                    <a href="/producto-detalle" class="link-op color-pasteleria">{{$producto->pro_titulo}}</a>
                                                @endforeach
                                            </div>
                                        @endif
                                    </div>
                                @endforeach

                                {{-- <div class="opcion-drop-n btn-color-pasteleria">
                                    <img style="width: 36px;" src="{{ asset('/public/web/imagenes/i-pasteleria.svg') }}" alt="">
                                    <p class="color-pasteleria">Pastelería</p>
                                    <img src="{{ asset('/public/web/imagenes/i-flecha-deracha-1.svg') }}" alt="">
                                    <div class="sub-content-drop ocultar-drop drop-default">
                                        <div class="titulo-drop">
                                            <h5>Productos Pastelería</h5>
                                            <a href="" class="boton-ver-op bg-red">Ver mas</a>
                                        </div>
                                        <a href="/producto-detalle" class="link-op color-pasteleria">Producto 1</a>
                                        <a href="/producto-detalle" class="link-op color-pasteleria">Producto 2</a>
                                        <a href="/producto-detalle" class="link-op color-pasteleria">Producto 3</a>
                                        <a href="/producto-detalle" class="link-op color-pasteleria">Producto 4</a>
                                        <a href="/producto-detalle" class="link-op color-pasteleria">Producto 5</a>
                                    </div>
                                </div> --}}

                                {{-- <div class="opcion-drop-n btn-color-italiana">
                                    <img style="width: 36px;" src="{{ asset('/public/web/imagenes/i-citaliana.svg') }}" alt="">
                                    <p class="color-italiana">Comida Italiana</p>
                                    <img src="{{ asset('/public/web/imagenes/i-flecha-deracha-1.svg') }}" alt="">
                                    <div class="sub-content-drop ocultar-drop">
                                        <div class="titulo-drop">
                                            <h5>Productos Comida Italiana</h5>
                                            <a href="" class="boton-ver-op bg-red">Ver mas</a>
                                        </div>
                                        <a href="/producto-detalle" class="link-op color-italiana">Producto 1</a>
                                        <a href="/producto-detalle" class="link-op color-italiana">Producto 2</a>
                                        <a href="/producto-detalle" class="link-op color-italiana">Producto 3</a>
                                        <a href="/producto-detalle" class="link-op color-italiana">Producto 4</a>
                                    </div>
                                </div> --}}

                                {{-- <div class="opcion-drop-n btn-color-rapida">
                                    <img style="width: 36px;" src="{{ asset('/public/web/imagenes/i-crapida.svg') }}" alt="">
                                    <p class="color-rapida">Comida Rápida</p>
                                    <img src="{{ asset('/public/web/imagenes/i-flecha-deracha-1.svg') }}" alt="">
                                    <div class="sub-content-drop ocultar-drop">
                                        <div class="titulo-drop">
                                            <h5>Productos Comida Rápida</h5>
                                            <a href="" class="boton-ver-op bg-red">Ver mas</a>
                                        </div>
                                        <a href="/producto-detalle" class="link-op color-rapida">Producto 1</a>
                                        <a href="/producto-detalle" class="link-op color-rapida">Producto 2</a>
                                        <a href="/producto-detalle" class="link-op color-rapida">Producto 3</a>
                                        <a href="/producto-detalle" class="link-op color-rapida">Producto 4</a>
                                        <a href="/producto-detalle" class="link-op color-rapida">Producto 5</a>
                                    </div>
                                </div> --}}

                                {{-- <div class="opcion-drop-n btn-color-cafeteria">
                                    <img style="width: 36px;" src="{{ asset('/public/web/imagenes/i-cafeteria.svg') }}" alt="">
                                    <p class="color-cafeteria">Cafetería</p>
                                    <img src="{{ asset('/public/web/imagenes/i-flecha-deracha-1.svg') }}" alt="">
                                    <div class="sub-content-drop ocultar-drop">
                                        <div class="titulo-drop">
                                            <h5>Productos Cafetería</h5>
                                            <a href="" class="boton-ver-op bg-red">Ver mas</a>
                                        </div>
                                        <a href="/producto-detalle" class="link-op color-cafeteria">Producto 1</a>
                                        <a href="/producto-detalle" class="link-op color-cafeteria">Producto 2</a>
                                        <a href="/producto-detalle" class="link-op color-cafeteria">Producto 3</a>
                                    </div>
                                </div> --}}

                                {{-- <div class="opcion-drop-n btn-color-servicios">
                                    <img style="width: 36px;" src="{{ asset('/public/web/imagenes/i-salimentacion.svg') }}" alt="">
                                    <p class="color-servicios">Servicios de alimentación</p>
                                    <img src="{{ asset('/public/web/imagenes/i-flecha-deracha-1.svg') }}" alt="">
                                    <div class="sub-content-drop ocultar-drop">
                                        <div class="titulo-drop">
                                            <h5>Productos Servicios de alimentación</h5>
                                            <a href="" class="boton-ver-op bg-red">Ver mas</a>
                                        </div>
                                        <a href="/producto-detalle" class="link-op color-servicios">Producto 1</a>
                                        <a href="/producto-detalle" class="link-op color-servicios">Producto 2</a>
                                        <a href="/producto-detalle" class="link-op color-servicios">Producto 3</a>
                                        <a href="/producto-detalle" class="link-op color-servicios">Producto 4</a>
                                    </div>
                                </div> --}}
                           </div>
                           <div class="linea-op-drop"></div>
                           <div></div>
                        </div>
                    </div>
                </div>

                <div class="dropdown">
                    <a href="/nuestras-recetas" class="dropbtn">Recetas</a> 
                </div>

                <div class="dropdown">
                    <a href="/noticias-tendencias" class="dropbtn">Noticias y tendencias</a> 
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
            <div><h2>Apasionados por el desarrollo de tu negocio gastronómico</h2></div>
        </div>
    </div>
    {{-- Menu movil --}}
    <div class="flex-bar-menu-movil">
        <div class="bar-menu-movil">
            <a href="/"><img width="130px" src="{{ asset('/public/web/imagenes/logo.svg') }}" alt=""></a>
            <div><img class="btn-hamburger" src="{{ asset('/public/web/imagenes/i-bar.svg') }}" alt=""></div>
        </div>
    </div>
    <div class="barra-menu-movil">
        <div class="flex-barra-menu-movil">
            <div class="close">
                <a href="https://www.soprole.cl/" target="_blank"><img style="width: 35px;" src="{{ asset('/public/web/imagenes/i-soprole.svg') }}" alt=""></a>
                <div>
                    <img class="btn-close" src="{{ asset('/public/web/imagenes/i-close.svg') }}" alt="">
                </div>
            </div>
            <div class="opcion-barra-n">
                <a href="/conocenos">Conócenos</a>
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
                <a href="/nuestras-recetas">Recetas</a>
            </div>
            <div class="opcion-barra-n">
                <a href="/noticias-tendencias">Noticias y Tendencias</a>
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
                <div class="opcion-drop-n btn-color-pasteleria producto-lista btn-pasteleria-segmento" name="Segmentos" id="{{$item->seg_id}}">
                    <img style="width: 36px;" src="{{ asset('/public/web/imagenes/i-pasteleria.svg') }}" alt="">
                    <p class="color-pasteleria">{{$item->seg_nombre}}</p>
                    @if (count($item->producto)>0)
                        <img src="{{ asset('/public/web/imagenes/i-flecha-deracha-1.svg') }}" alt="">
                    @endif
                </div>
            @endforeach

            {{-- <div class="opcion-drop-n btn-color-pasteleria producto-lista btn-pasteleria-segmento">
                <img style="width: 36px;" src="{{ asset('/public/web/imagenes/i-pasteleria.svg') }}" alt="">
                <p class="color-pasteleria">Pastelería</p>
                <img src="{{ asset('/public/web/imagenes/i-flecha-deracha-1.svg') }}" alt="">
            </div>

            <div class="opcion-drop-n btn-color-italiana producto-lista btn-italiana-segmento">
                <img style="width: 36px;" src="{{ asset('/public/web/imagenes/i-citaliana.svg') }}" alt="">
                <p class="color-italiana">Comida Italiana</p>
                <img src="{{ asset('/public/web/imagenes/i-flecha-deracha-1.svg') }}" alt="">
            </div>

            <div class="opcion-drop-n btn-color-rapida producto-lista btn-rapida-segmento">
                <img style="width: 36px;" src="{{ asset('/public/web/imagenes/i-crapida.svg') }}" alt="">
                <p class="color-rapida">Comida Rápida</p>
                <img src="{{ asset('/public/web/imagenes/i-flecha-deracha-1.svg') }}" alt="">
            </div>

            <div class="opcion-drop-n btn-color-cafeteria producto-lista btn-cafeteria-segmento">
                <img style="width: 36px;" src="{{ asset('/public/web/imagenes/i-cafeteria.svg') }}" alt="">
                <p class="color-cafeteria">Cafetería</p>
                <img src="{{ asset('/public/web/imagenes/i-flecha-deracha-1.svg') }}" alt="">
            </div>

            <div class="opcion-drop-n btn-color-servicios producto-lista btn-servicios-segmento">
                <img style="width: 36px;" src="{{ asset('/public/web/imagenes/i-salimentacion.svg') }}" alt="">
                <p class="color-servicios">Servicios de alimentación</p>
                <img src="{{ asset('/public/web/imagenes/i-flecha-deracha-1.svg') }}" alt="">
            </div> --}}
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
                <div class="producto-lista-pasteleria ocultar-producto-lista" name="SegmentoProductos" id="div_SegmentoProductos{{$item->seg_id}}">
                    @if (count($item->producto)>0)
                        @foreach ($item->producto as $producto)
                            <div class="opcion-drop-n btn-color-pasteleria">
                                <p class="color-pasteleria">{{$producto->pro_titulo}}</p>
                            </div>
                        @endforeach
                    @endif
                </div>
            @endforeach
            {{-- Lista productos pasteleria --}}
            {{-- <div class="producto-lista-pasteleria ocultar-producto-lista">
                <div class="opcion-drop-n btn-color-pasteleria">
                    <p class="color-pasteleria">Producto</p>
                </div>

                <div class="opcion-drop-n btn-color-pasteleria">
                    <p class="color-pasteleria">Producto</p>
                </div>

                <div class="opcion-drop-n btn-color-pasteleria">
                    <p class="color-pasteleria">Producto</p>
                </div>

                <div class="opcion-drop-n btn-color-pasteleria">
                    <p class="color-pasteleria">Producto</p>
                </div>

                <div class="opcion-drop-n btn-color-pasteleria">
                    <p class="color-pasteleria">Producto</p>
                </div>
            </div> --}}

            {{-- Lista productos italiana --}}
            {{-- <div class="producto-lista-italiana ocultar-producto-lista">
                <div class="opcion-drop-n btn-color-italiana">
                    <p class="color-italiana">Producto</p>
                </div>

                <div class="opcion-drop-n btn-color-italiana">
                    <p class="color-italiana">Producto</p>
                </div>

                <div class="opcion-drop-n btn-color-italiana">
                    <p class="color-italiana">Producto</p>
                </div>

                <div class="opcion-drop-n btn-color-italiana">
                    <p class="color-italiana">Producto</p>
                </div>

                <div class="opcion-drop-n btn-color-italiana">
                    <p class="color-italiana">Producto</p>
                </div>
            </div> --}}

            {{-- Lista productos rapida --}}
            {{-- <div class="producto-lista-rapida ocultar-producto-lista">
                <div class="opcion-drop-n btn-color-rapida">
                    <p class="color-rapida">Producto</p>
                </div>

                <div class="opcion-drop-n btn-color-rapida">
                    <p class="color-rapida">Producto</p>
                </div>

                <div class="opcion-drop-n btn-color-rapida">
                    <p class="color-rapida">Producto</p>
                </div>

                <div class="opcion-drop-n btn-color-rapida">
                    <p class="color-rapida">Producto</p>
                </div>

                <div class="opcion-drop-n btn-color-rapida">
                    <p class="color-rapida">Producto</p>
                </div>
            </div> --}}

            {{-- Lista productos cafeteria --}}
            {{-- <div class="producto-lista-cafeteria ocultar-producto-lista">
                <div class="opcion-drop-n btn-color-cafeteria">
                    <p class="color-cafeteria">Producto</p>
                </div>

                <div class="opcion-drop-n btn-color-cafeteria">
                    <p class="color-cafeteria">Producto</p>
                </div>

                <div class="opcion-drop-n btn-color-cafeteria">
                    <p class="color-cafeteria">Producto</p>
                </div>

                <div class="opcion-drop-n btn-color-cafeteria">
                    <p class="color-cafeteria">Producto</p>
                </div>

                <div class="opcion-drop-n btn-color-cafeteria">
                    <p class="color-cafeteria">Producto</p>
                </div>
            </div> --}}

            {{-- Lista productos servicios --}}
            {{-- <div class="producto-lista-servicios ocultar-producto-lista">
                <div class="opcion-drop-n btn-color-servicios">
                    <p class="color-servicios">Producto</p>
                </div>

                <div class="opcion-drop-n btn-color-servicios">
                    <p class="color-servicios">Producto</p>
                </div>

                <div class="opcion-drop-n btn-color-servicios">
                    <p class="color-servicios">Producto</p>
                </div>

                <div class="opcion-drop-n btn-color-servicios">
                    <p class="color-servicios">Producto</p>
                </div>

                <div class="opcion-drop-n btn-color-servicios">
                    <p class="color-servicios">Producto</p>
                </div>
            </div> --}}

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
                <a href="/academia" class="boton-ver-op bg-red">Ver mas</a>
            </div>
            
            @foreach (App\Http\Controllers\Management\AcademiaController::listar() as $item)
                <a href="/academia-detalle" class="opcion-drop-n btn-color-pasteleria">
                    <img style="width: 36px;" src="{{ asset('/public/web/imagenes/i-pasteleria.svg') }}" alt="">
                    <p class="color-pasteleria">{{$item->aca_titulo}}</p>
                </a>
            @endforeach
            {{-- <a href="/academia-detalle" class="opcion-drop-n btn-color-pasteleria">
                <img style="width: 36px;" src="{{ asset('/public/web/imagenes/i-pasteleria.svg') }}" alt="">
                <p class="color-pasteleria">Pastelería</p>
            </a>

            <a href="/academia-detalle" class="opcion-drop-n btn-color-italiana">
                <img style="width: 36px;" src="{{ asset('/public/web/imagenes/i-citaliana.svg') }}" alt="">
                <p class="color-italiana">Comida Italiana</p>
            </a>

            <a href="/academia-detalle" class="opcion-drop-n btn-color-rapida">
                <img style="width: 36px;" src="{{ asset('/public/web/imagenes/i-crapida.svg') }}" alt="">
                <p class="color-rapida">Comida Rápida</p>
            </a>

            <a href="/academia-detalle" class="opcion-drop-n btn-color-cafeteria">
                <img style="width: 36px;" src="{{ asset('/public/web/imagenes/i-cafeteria.svg') }}" alt="">
                <p class="color-cafeteria">Cafetería</p>
            </a>

            <a href="/academia-detalle" class="opcion-drop-n btn-color-servicios">
                <img style="width: 36px;" src="{{ asset('/public/web/imagenes/i-salimentacion.svg') }}" alt="">
                <p class="color-servicios">Servicios de alimentación</p>
            </a> --}}
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
    
    var SegmentoProductos = {!! json_encode(App\Http\Controllers\Management\SegmentoController::listarWithProducto()); !!}
    for(i=0;i<len_Segmentos;i+=1){
        Segmentos[i].onclick=click_SegmentoProductos;
    }
    function click_SegmentoProductos(){
        SegmentoProductos.forEach((SegmentoProducto, i) => {
            if (SegmentoProducto.seg_id == this.id) {
            var y = document.getElementById("div_SegmentoProductos"+this.id);
            y.style.display = "block";
            }else{
            var y = document.getElementById("div_SegmentoProductos"+SegmentoProducto.seg_id);
            y.style.display = "none";
            }
        });
    }
</script>