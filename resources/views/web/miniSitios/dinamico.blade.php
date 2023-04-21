
@if (count($productos) > 0)
<section class="seccion-home removeSection">
    <h2 style="color: {{ $segmento->seg_color_texto == '#ffffff' ?  $segmento->seg_color : $segmento->seg_color_texto }} !important">Mira nuestros productos</h2>
    <br>
    <p class="sub-titulo"  style="color: {{ $segmento->seg_color_texto == '#ffffff' ?  $segmento->seg_color : $segmento->seg_color_texto }} !important">Nos apasiona entregar productos de calidad. Por ello, estamos enfocados en innovar y
        desarrollar productos acordes a las necesidades de tu negocio.</p>
    <div class="cuadros-info cuadros-row-4">
        @foreach ($productos as $producto)
            <a href="/productos/detalle/{{ $producto->pro_url }}" class="cuadros-info-n">
                <div class="img"><img src="{{ asset($producto->pro_imagen) }}" alt="">
                </div>
                <div class="texto">
                    <h5  style="color: {{ $segmento->seg_color_texto == '#ffffff' ?  $segmento->seg_color : $segmento->seg_color_texto }} !important">{{ $producto->pro_titulo }}</h5>
                </div>
            </a>
        @endforeach
    </div>
</section>
@endif

@if (count($academias) > 0)
<section class="flex-academia-home bg-minisitio removeSection">
    <div class="seccion-home">
        <h2 style="color: {{ $segmento->seg_color_texto == $segmento->seg_color ? '#ffffff' : $segmento->seg_color_texto }} !important">Conoce la Academia Food Professionals
        </h2>
        <br>
        <p class="sub-titulo"  style="color: {{ $segmento->seg_color_texto == $segmento->seg_color ? '#ffffff' : $segmento->seg_color_texto }}  !important">Nos apasiona apoyar el desarrollo de tu negocio gastronómico. Por ello, a
            través de nuestra academia, te brindamos herramientas que buscan potenciar tu pastelería, pizzería,
            restaurante, banquetera o cafetería</p>
        <div class="cuadros-info cuadros-row-4">

            @foreach ($academias as $academia)
                <a href="{{ route('web.academia.detalle', $academia->aca_id) . '-' . $academia->aca_url }}"
                    class="cuadros-info-n">
                    <div class="img"><img src="{{ asset($academia->aca_imagen) }}" alt="">
                    </div>
                    <div class="texto">
                        <h5  style="color: {{ $segmento->seg_color_texto == '#ffffff' ?  $segmento->seg_color : $segmento->seg_color_texto }} !important">{{ $academia->aca_titulo }}</h5>
                        <p  style="color: {{ $segmento->seg_color_texto == '#ffffff' ?  $segmento->seg_color : $segmento->seg_color_texto }} !important">{{ $academia->aca_titulo2 }}</p>
                    </div>
                </a>
            @endforeach
        </div>
        <a href="{{ route('web.academia.index') . '?segmentoId[0]=' . $segmento->seg_id }}"
            class="boton bg-red">Ver más cursos</a>
    </div>
</section>
@endif


@if (count($recetas) > 0)

<section class="seccion-home removeSection">
    <h2 style="color: {{ $segmento->seg_color_texto == '#ffffff' ?  $segmento->seg_color : $segmento->seg_color_texto }} !important">Mira estas recetas</h2>
    <br>
    <p class="sub-titulo"  style="color: {{ $segmento->seg_color_texto == '#ffffff' ?  $segmento->seg_color : $segmento->seg_color_texto }} !important">Nos apasiona ayudarte a crecer, y con estas recetas, podrás expandir tu menú y
        descubrir nuevas técnicas para crear sonrisas en quienes disfruten de tus preparaciones. </p>
    <div class="cuadros-info cuadros-row-3">
        @foreach ($recetas as $receta)
            <a href="{{ route('web.receta.detalle', $receta->rec_id) . '-' . $receta->rec_url }}"
                class="cuadros-info-n">
                <div class="img"><img src="{{ asset($receta->rec_imagen) }}" alt="">
                </div>
                <div class="texto">
                    <h5  style="color: {{ $segmento->seg_color_texto == '#ffffff' ?  $segmento->seg_color : $segmento->seg_color_texto }} !important">{{ $receta->rec_titulo }}</h5>
                </div>
            </a>
        @endforeach
    </div>
</section>
@endif


@if (count($noticias) > 0)
<section class="seccion-home removeSection">
    <h2 style="color: {{ $segmento->seg_color_texto == '#ffffff' ?  $segmento->seg_color : $segmento->seg_color_texto }} !important">Conoce más sobre Tendencias y Noticias</h2>
    <br>
    <p class="sub-titulo" style="color: {{ $segmento->seg_color_texto == '#ffffff' ?  $segmento->seg_color : $segmento->seg_color_texto }} !important" >Nos apasiona mantenerte informado, y esta sección, encontrarás las últimas noticias
        sobre capacitaciones, eventos, tendencias y todo lo relacionado al mundo gastronómico.</p>
    <div class="cuadros-info cuadros-row-3">
        @foreach ($noticias as $noticia)
            <a href="{{ route('web.noticia.detalle', $noticia->not_id) . '-' . $noticia->not_url }}"
                class="cuadros-info-n">
                <div class="img">
                    @if (isset($noticia->imagenListado->ino_imagen))
                        <img src="{{ asset($noticia->imagenListado->ino_imagen) }}" alt="">
                    @else
                        <img src="/public/web/imagenes/no-imagen.png" alt="">
                    @endif
                </div>
                <div class="texto">
                    <h5  style="color: {{ $segmento->seg_color_texto == '#ffffff' ?  $segmento->seg_color : $segmento->seg_color_texto }} !important">{{ $noticia->not_titulo }}</h5>
                    <p  style="color: {{ $segmento->seg_color_texto == '#ffffff' ?  $segmento->seg_color : $segmento->seg_color_texto }} !important">{{ $noticia->not_titulo2 }}</p>
                </div>
            </a>
        @endforeach
    </div>
</section>
@endif