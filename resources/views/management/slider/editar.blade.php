@extends('layout.management')

@section('title', 'Editar slider')

@section('content')
    <div class="formulario-admin-secciones">
        <a href="{{ route('administracion.slider.index') }}" class="enlace btn btn-primary my-3"><i
                class="bi bi-arrow-bar-left"></i> volver
            al listado</a>
        <div class="row">
            <h1>Editar</h1>
        </div>
        <form name="formSubmit" class="formulario" id="formSubmit" enctype="multipart/form-data" method="post">
            @csrf
            <input type="hidden" name="slider_id" value="{{ $slider->sli_id }}" />
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">

                        <div class="form-floating my-3">
                            <input type="text" name="nombre" class="form-control" id="pro_nombre"
                                placeholder="pro_nombre" autocomplete="new-password" value="{{ $slider->sli_nombre }}"
                                required>
                            <label for="nombre">Nombre</label>
                        </div>

                        <label for="imagen" class="col-md-4 col-form-label">Imagen</label>
                        @if ($slider->sli_imagen != '')
                            <a target="_blank" href='{{ $slider->sli_imagen }} '>Ver
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


                        <label for="estado" class="col-md-4 col-form-label">Estado</label>
                        <div class="row mb-3">
                            <div class="form-floating my-3">

                                <select name="estado" id="estado" class="tipo-seleccion">
                                    <option {{ $slider->sli_estado == 1 ? 'selected' : false }} value="1">Activo
                                    </option>
                                    <option {{ $slider->sli_estado == 0 ? 'selected' : false }}value="0">Inactivo</option>
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
    <script src="{{ asset('public/management/js/slider/editar.js?v=' . rand()) }}"></script>
    <script>
        let ancho = {{ $ancho }}
        let alto = {{ $alto }}
    </script>
@endpush
