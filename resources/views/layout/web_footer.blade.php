<footer>
    <div class="linea-footer">
    </div>
    
    <div class="contenido-footer">
        <div class="logo-footer">
            <a href="/"><img src="{{ asset('/public/web/imagenes/logo.svg') }}" alt=""></a>
            <div>
                <img src="{{ asset('/public/web/imagenes/i-correo.svg') }}" alt="">   
                <a href="mailto:soproleFP@soprole.cl">soproleFP@soprole.cl</a>
            </div>
            <div>
                <img src="{{ asset('/public/web/imagenes/i-telefono.svg') }}" alt="">
                <a href="tel:6006006600"><h3>600 600 6600</h3></a>
            </div>
        </div>
        <div class="linea-columna"></div>
        <div class="menu-footer-1">
            @foreach (App\Http\Controllers\Management\SegmentoController::listar() as $item)
                <a href="{{route('web.academia.index').'?segmentoId[0]='.$item->seg_id}}">{{$item->seg_nombre}}</a>
            @endforeach
        </div>
        <div class="linea-columna"></div>
        <div class="menu-footer-2">
            <a href="/contacto">Contáctenos</a>
            <a href="{{route('web.academia.index')}}">Academia</a>
            <a href="/productos">Productos</a>
            <a href="{{route('web.receta.index')}}">Recetas</a>
            <a href="{{route('web.noticia.index')}}"> Noticias y tendencias</a>
            <a href="/hazte-cliente">Hazte cliente</a>
            <a href="">Ir a la tienda</a>
        </div>
        <div class="rrss-footer">
            <div>
                <p>Encuéntranos en redes sociales</p>
                <div class="logos-rrrss-footer">
                    <a href=""><img src="{{ asset('/public/web/imagenes/i-insta-azul.svg') }}" alt=""></a>
                    <a href=""><img src="{{ asset('/public/web/imagenes/i-facebook-azul.svg') }}" alt=""></a>
                </div>
            </div>
            
        </div>
    </div>
    <div class="sub-footer">
        <p>©2023 Fonterra Co-operative Group</p>
        <div class="linea-footer-2"></div>
        <div>
            <a href="/politicas-de-privacidad">Políticas de privacidad</a>
            <p>|</p>
            <a href="/informacion-consumidor">Información del Consumidor</a>
            <p>|</p>
            <a href="/terminos-condiciones">Términos y Condiciones</a>
        </div>
    </div>
</footer>