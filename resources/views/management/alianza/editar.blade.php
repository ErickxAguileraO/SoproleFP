@extends('layout.management')

@section('title', 'Crear slider')

@section('content')
    <div class="formulario-admin-secciones">
        <a href="{{ route('administracion.slider.index') }}" class="enlace btn btn-primary my-3"><i
                class="bi bi-arrow-bar-left"></i> volver
            al listado</a>
        <div class="row">
            <h1>Editar</h1>
        </div>
        <form name="formSubmit" class="formulario" id="formSubmit" enctype="multipart/form-data" method="post">
            <input type="hidden" name="alianza_id" value="{{ $alianza->ali_id }}" />
            @csrf
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">

                        <div class="form-floating my-3">
                            <input type="text" name="nombre" class="form-control" id="nombre"
                                placeholder="nombre" autocomplete="new-password" value="{{ $alianza->ali_nombre }}" required>
                            <label for="nombre">Nombre</label>
                        </div>

                        <label for="imagen" class="col-md-4 col-form-label">Imagen</label>
                        @if ($alianza->ali_imagen != '')
                        <a target="_blank" href='{{ $alianza->ali_imagen }} '>Ver
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

                        <label for="pagina_editable" class="col-md-4 col-form-label">Página editable</label>
                        <div class="row mb-3">
                            <div class="form-floating my-3">
                                <select name="pagina_editable" id="pagina_editable" class="tipo-seleccion">
                                    @foreach ($paginas as $pagina )
                                    <option {{ $alianza->ali_editable_id == $pagina->edi_id ? 'selected' : false  }} value="{{$pagina->edi_id}}">{{$pagina->edi_titulo}}</option>
                                    @endforeach
                                </select>
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
    <script src="{{ asset('public/management/js/alianza/editar.js?v=' . rand()) }}"></script>
    <script>
        let ancho = {{ $ancho }}
        let alto = {{ $alto }}
    </script>
@endpush
