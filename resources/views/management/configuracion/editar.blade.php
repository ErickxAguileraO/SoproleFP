@extends('layout.management')

@section('title', 'Editar configuracion')

@section('content')
    <div class="formulario-admin-secciones">
        <a href="{{ route('administracion.configuracion.index') }}" class="enlace btn btn-primary my-3"><i
                class="bi bi-arrow-bar-left"></i> volver
            al listado</a>
        <div class="row">
            <h1>Editar configuracion</h1>
        </div>
        <form name="formSubmit" class="formulario" id="formSubmit" enctype="multipart/form-data" method="post">
            @csrf
            <input type="hidden" name="configuracion_id" value="{{ $configuracion->con_id }}" />
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        
                        <label for="titulo">Contenido</label>
                        <div class="form-floating my-3">
                            <textarea id="contenido" class="form-control" name="contenido" rows="4" cols="50">{{ $configuracion->con_contenido }}</textarea>
                        </div>
                        <label for="orden">Link</label>
                        <div class="form-floating my-3">
                            <input type="text" name="link" class="form-control" id="link" value="{{ $configuracion->con_link }}"  >
                        </div>

                        <label for="orden">Tipo</label>
                        <div class="form-floating my-3">
                            <input type="text" name="tipo" class="form-control" id="tipo" value="{{ $configuracion->con_tipo }}"  >
                        </div>

                        <label for="imagen">Imagen ({{ $ancho . 'px ancho x ' . $alto . 'px alto' }})</label>
                        @if ($configuracion->con_imagen != '')
                            <a target="_blank" href='{{ $configuracion->con_imagen }} '>Ver
                                imagen adjunta <i class="fas fa-eye"></i></a>
                        @endif
                        <div class="row mb-3">
                            <div class="form-floating my-3">

                                <input type="file" class="input-img-solo" id="imagen" name="imagen">

                                @error('imagen')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <button class="btn btn-success btn-agregar">Actualizar</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
@push('extra-js')
    <script src="{{ asset('public/management/js/configuracion/editar.js?v=' . rand()) }}"></script>
    <script>
        let ancho = {{ $ancho }}
        let alto = {{ $alto }}
    </script>
@endpush
