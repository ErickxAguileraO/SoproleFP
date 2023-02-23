@foreach ($result as $local)
    <div class="ubicacion-n single-item"">
        <div class="drop-down" style="cursor:pointer;">
            <p>{{$local->loc_nombre}}</p>
            <img src="{{ asset('/public/web/imagenes/i-flecha-abajo.svg') }}" alt="">
        </div>
        <div class="ocultar-acordeon">
            <div class="grid-ocultar-acordeon">
                <div>
                    <span>Dirección</span>
                    <p>{{$local->loc_direccion}}</p>
                </div>

                <div>
                    <span>Horario</span>
                    <p>{{$local->loc_horario}}</p>
                </div>

                <div>
                    <span>Contacto</span>
                    <p>{{$local->loc_contacto}}</p>
                </div>

                <div>
                    <span>Teléfono</span>
                    <p>{{$local->loc_telefono}}</p>
                </div>
            </div>
        </div>
    </div>
@endforeach

