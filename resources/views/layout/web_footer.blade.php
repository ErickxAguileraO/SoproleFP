<footer>
    <div class="linea-footer">
    </div>
    
    <div class="contenido-footer">
        @php
            $facebook = App\Http\Controllers\Management\ConfiguracionController::listarByTipo('facebook');
            $instagram = App\Http\Controllers\Management\ConfiguracionController::listarByTipo('instagram');
            $mail = App\Http\Controllers\Management\ConfiguracionController::listarByTipo('mail');
            $telefono = App\Http\Controllers\Management\ConfiguracionController::listarByTipo('telefono');
            if (isset($mail->con_contenido)) {
                $mail->con_contenido = str_replace(["<p>", "</p>"], "", $mail->con_contenido);
            }
            if (isset($telefono->con_contenido)) {
                $telefono->con_contenido = str_replace(["<p>", "</p>"], "", $telefono->con_contenido);
            }
        @endphp
        <div class="logo-footer">
            <a href="/"><img src="{{ asset('/public/web/imagenes/logo.svg') }}" alt=""></a>
            <div>
                <img src="{{ asset('/public/web/imagenes/i-correo.svg') }}" alt="">   
                <a href="mailto:{{isset($mail->con_contenido) ? $mail->con_contenido : 'soproleFP@soprole.cl'}}">{{isset($mail->con_contenido) ? $mail->con_contenido : 'soproleFP@soprole.cl'}}</a>
            </div>
            <div>
                <img src="{{ asset('/public/web/imagenes/i-telefono.svg') }}" alt="">
                <a href="tel:{{isset($telefono->con_contenido) ? $telefono->con_contenido : '6006006600'}}"><h3>{{isset($telefono->con_contenido) ? $telefono->con_contenido : '600 600 6600'}}</h3></a>
            </div>
        </div>
        <div class="linea-columna"></div>
        <div class="menu-footer-1">
            @foreach (App\Http\Controllers\Management\SegmentoController::listar() as $item)
                <a href="/mini-sitio/{{ $item->seg_url }}">{{ $item->seg_nombre }}</a>
            @endforeach
        </div>
        <div class="linea-columna"></div>
        <div class="menu-footer-2">
            <a href="/contacto/">Contáctanos</a>
            <a href="/conocenos/">Conócenos</a>
            <a href="{{route('web.academia.index')}}">Academia</a>
            <a href="/productos">Productos</a>
            <a href="{{route('web.receta.index')}}">Recetas</a>
            <a href="{{route('web.noticia.index')}}">Tendencias y noticias</a>
            <a href="/hazte-cliente">Hazte cliente</a>
            <a  class="tienda" style="cursor: pointer;">¿Cómo comprar?</a>
        </div>
        <div class="rrss-footer">
            <div>
                <p>Encuéntranos en redes sociales</p>
                <div class="logos-rrrss-footer">
                    <a href="{{isset($instagram->con_link) ? $instagram->con_link : ''}}" target="_blank"><img src="{{ asset('/public/web/imagenes/i-insta-azul.svg') }}" alt=""></a>
                    <a href="{{isset($facebook->con_link) ? $facebook->con_link : ''}}" target="_blank"><img src="{{ asset('/public/web/imagenes/i-facebook-azul.svg') }}" alt=""></a>
                </div>
            </div>
            
        </div>
    </div>
    <div class="sub-footer">
        <p></p>
        <div class="linea-footer-2"></div>
        <div>
            <a href="/politicas-de-privacidad">Políticas de privacidad</a>
            <p>|</p>
            <a href="/informacion-consumidor">Información del Consumidor</a>
            <p>|</p>
            <a href="/terminos-condiciones">Términos y Condiciones</a>
            <p>|</p>
            <a href="/bases-legales">Bases legales</a>
        </div>
    </div>
</footer>