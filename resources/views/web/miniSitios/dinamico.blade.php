@if (count($productos) > 0)
    <section class="seccion-home removeSection">
        <h2>Mira nuestros productos</h2>
        <br>
        <p class="sub-titulo">Nos apasiona entregar productos de calidad. Por ello, estamos enfocados en innovar y
            desarrollar productos acordes a las necesidades de tu negocio.</p>
        <div class="cuadros-info cuadros-row-4">
            @foreach ($productos as $producto)
                <a href="/productos/detalle/{{ $producto->pro_url }}" class="cuadros-info-n">
                    <div class="img"><img src="{{ asset($producto->pro_imagen) }}" alt="">
                    </div>
                    <div class="texto">
                        <h5>{{ $producto->pro_titulo }}</h5>
                    </div>
                </a>
            @endforeach
        </div>
    </section>
@endif


@if (count($academias) > 0)
    <section class="flex-academia-home bg-minisitio removeSection">
        <div class="seccion-home">
            <h2>Academia Food Professionals</h2>
            <br>
            <p class="sub-titulo">Nos apasiona potenciar el desarrollo de tu negocio gastronómico. Por ello, a través de
                nuestra academia, te brindamos herramientas que buscan potenciar tu pastelería, pizzería, restaurante,
                banquetera o cafetería</p>
            <div class="cuadros-info cuadros-row-4">

                @foreach ($academias as $academia)
                    <a href="/academia/detalle/{{ $academia->aca_url }}" class="cuadros-info-n">
                        <div class="img"><img src="{{ asset($academia->aca_imagen) }}" alt="">
                        </div>
                        <div class="texto">
                            <h5>{{ $academia->aca_titulo }}</h5>
                            <p>{{ $academia->aca_titulo2 }}</p>
                        </div>
                    </a>
                @endforeach
            </div>
            <a href="" class="boton bg-red">Ver más cursos</a>
        </div>
    </section>
@endif


@if (count($recetas) > 0)

    <section class="seccion-home removeSection">
        <h2>Mira estas recetas</h2>
        <br>
        <p class="sub-titulo">Nos apasiona ayudarte a crecer, y con estas recetas, podrás expandir tu menú y descubrir
            nuevas técnicas para crear sonrisas en quienes disfruten de tus preparaciones. </p>
        <div class="cuadros-info cuadros-row-3">
            @foreach ($recetas as $receta)
                <a href="/receta/detalle/{{ $receta->rec_url }}" class="cuadros-info-n">
                    <div class="img"><img src="{{ asset($receta->rec_imagen) }}" alt="">
                    </div>
                    <div class="texto">
                        <h5>{{ $receta->rec_titulo }}</h5>
                    </div>
                </a>
            @endforeach
        </div>
    </section>
@endif

@if (count($noticias) > 0)
    <section class="seccion-home removeSection">
        <h2>Tendencias y Noticias</h2>
        <br>
        <p class="sub-titulo">Nos apasiona mantenerte informado, y esta sección, encontrarás las últimas noticias sobre
            capacitaciones, eventos, tendencias y todo lo relacionado al mundo gastronómico.</p>
        <div class="cuadros-info cuadros-row-3">
            @foreach ($noticias as $noticia)
                <a href="/detalle/noticia-tendencia/{{ $noticia->not_url }}" class="cuadros-info-n">
                    <div class="img"><img src="{{ asset($noticia->imagenListado->ino_imagen) }}" alt="">
                    </div>
                    <div class="texto">
                        <h5>Título con una línea</h5>
                    </div>
                </a>
            @endforeach
        </div>
    </section>
@endif
</div>
