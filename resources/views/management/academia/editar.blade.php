@extends('layout.management')
@push('extra-css')
    <link rel="stylesheet" type="text/css" href="{{ asset('/public/management/css/checkbox.css') }}">
@endpush

@section('title', 'Editar academia')

@section('content')
    <div class="formulario-admin-secciones">
        <a href="{{ route('administracion.academia.index') }}" class="enlace btn btn-primary my-3"><i
                class="bi bi-arrow-bar-left"></i> volver
            al listado</a>
        <div class="row">
            <h1>Editar academia</h1>
        </div>
        <form name="formSubmit" class="formulario" id="formSubmit" enctype="multipart/form-data" method="post">
            <input type="hidden" name="academia_id" value="{{ $academia->aca_id }}" />
            @csrf
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="titulo">Título</label>
                        <div class="form-floating my-3">
                            <input type="text" name="titulo" class="form-control" id="titulo"
                                value="{{ $academia->aca_titulo }}" required>
                        </div>
                        <label for="titulo">Título 2</label>
                        <div class="form-floating my-3">
                            <input type="text" name="titulo2" class="form-control" id="titulo2"
                                value="{{ $academia->aca_titulo2 }}" required>
                        </div>
                        <label for="titulo">Fecha</label>
                        <div class="form-floating my-3">
                            <input type="date" name="fecha" class="form-control" id="fecha" value="{{$academia->aca_fecha}}"
                                required>
                        </div>
                        <label for="">Contenido</label>
                        <div class="form-floating my-3">
                            <textarea id="contenido" class="form-control" name="contenido" rows="4" cols="50">{{ $academia->aca_contenido }}</textarea>
                        </div>

                        <label for="video">Video</label>
                        <div class="form-floating my-3">
                            <input type="text" name="video" class="form-control" id="video"
                                autocomplete="new-password" value="{{ $academia->aca_video }}" required>
                        </div>

                        <label for="imagen">Imagen ({{ $ancho . 'px ancho x ' . $alto . 'px alto' }})</label>
                        @if ($academia->aca_imagen != '')
                            <a target="_blank" href='{{ $academia->aca_imagen }} '>Ver
                                imagen adjunta <i class="fas fa-eye"></i></a>
                        @endif
                        <div class="row mb-3">
                            <div class="form-floating my-3">
                                <input type="file" class="input-img-solo" id="imagen" name="imagen">
                            </div>
                        </div>

                        <label for="orden">Segmentos</label>
                        <div style="margin-top: 15px;">
                            @foreach ($segmentos as $segmento)
                                <label class="containerCheckbox">{{ $segmento->seg_nombre }}
                                    <input {{ in_array($segmento->seg_id, $segmentosSeleccionados) ? 'checked' : false }}
                                        type="checkbox" name="segmentos[]" value="{{ $segmento->seg_id }}">
                                    <span class="checkmark"></span>
                                </label>
                            @endforeach
                        </div>
                        <br />

                        <label for="nombre_url">Nombre de URL</label>
                        <div class="form-floating my-3">
                            <input type="text" name="nombre_url" class="form-control" id="nombre_url"
                                autocomplete="new-password" value="{{$academia->aca_url}}" required>
                        </div>

                        <label for="orden">Orden</label>
                        <div class="form-floating my-3">
                            <input type="text" name="orden" class="form-control" id="orden" placeholder="orden"
                                autocomplete="new-password" value="{{ $academia->aca_orden }}" required
                                oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');">
                        </div>
                        <div>
                            <label for="estado">Estado</label>
                            <div class="row mb-3">
                                <div class="form-floating my-3">
                                    <select name="estado" id="estado" class="tipo-seleccion">
                                        <option {{ $academia->aca_estado == 1 ? 'selected' : false }} value="1">Activo
                                        </option>
                                        <option {{ $academia->aca_estado == 0 ? 'selected' : false }} value="0">
                                            Inactivo</option>
                                    </select>
                                </div>
                            </div>
                            <button class="btn btn-success btn-agregar">actualizar</button>
                        </div>
                    </div>
                </div>
        </form>
    </div>
@endsection
@push('extra-js')
    <script src="{{ asset('public/management/js/academia/editar.js?v=' . rand()) }}"></script>
    <script>
        let ancho = {{ $ancho }}
        let alto = {{ $alto }}
    </script>
@endpush
