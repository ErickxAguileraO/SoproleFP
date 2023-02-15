@extends('layout.management')

@section('title', 'Crear configuracion')

@section('content')
    <div class="formulario-admin-secciones">
        <a href="{{ route('administracion.configuracion.index') }}" class="enlace btn btn-primary my-3"><i
                class="bi bi-arrow-bar-left"></i> volver
            al listado</a>
        <div class="row">
            <h1>Crear configuracion</h1>
        </div>
        <form name="formSubmit" class="formulario" id="formSubmit" enctype="multipart/form-data" method="post">
            @csrf
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">

                        <label for="titulo">Contenido</label>
                        <div class="form-floating my-3">
                            <textarea id="contenido" class="form-control" name="contenido" rows="4" cols="50"></textarea>
                        </div>
                        <label for="orden">Link</label>
                        <div class="form-floating my-3">
                            <input type="text" name="link" class="form-control" id="link" value=""  >
                        </div>

                        <label for="orden">Tipo</label>
                        <div class="form-floating my-3">
                            <input type="text" name="tipo" class="form-control" id="tipo" value=""  >
                        </div>

                        <label for="imagen">Imagen ({{ $ancho ."px ancho x ".$alto."px alto"}})</label>
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
                        <button class="btn btn-success btn-agregar">Agregar</button>
                    </div>
                </div>
            </div>
        </form>

    </div>
@endsection
@push('extra-js')
    <script src="{{ asset('public/management/js/configuracion/crear.js?v=' . rand()) }}"></script>
    <script>
        let ancho = {{ $ancho }}
        let alto = {{ $alto }}
    </script>
@endpush
