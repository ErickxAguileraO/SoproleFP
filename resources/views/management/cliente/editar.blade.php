@extends('layout.management')

@section('title', 'Editar cliente')

@section('content')
    <div class="formulario-admin-secciones">
        <a href="{{ route('administracion.cliente.index') }}" class="enlace btn btn-primary my-3"><i
                class="bi bi-arrow-bar-left"></i> volver
            al listado</a>
        <div class="row">
            <h1>Editar cliente</h1>
        </div>
        <form name="formSubmit" class="formulario" id="formSubmit" enctype="multipart/form-data" method="post">
            @csrf
            <input type="hidden" name="cliente_id" value="{{ $cliente->clie_id }}" />
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="rut">Nombre</label>
                        <div class="form-floating my-3">
                            <input type="text" name="nombre" class="form-control" id="nombre" value="{{$cliente->clie_nombre}}"
                                required>
                        </div>


                        <label for="imagen">Imagen ({{ $ancho . 'px ancho x ' . $alto . 'px alto' }})</label>
                        @if ($cliente->clie_imagen != '')
                            <a target="_blank" href='{{ $cliente->clie_imagen }} '>Ver
                                imagen adjunta <i class="fas fa-eye"></i></a>
                        @endif
                        <div class="row mb-3">
                            <div class="form-floating my-3">
                                <input type="file" class="input-img-solo" id="imagen" name="imagen">
                            </div>
                        </div>

                        <label for="estado">Página editable</label>
                        <div class="row mb-3">
                            <div class="form-floating my-3">
                                <select name="editable" id="editable" class="tipo-seleccion">
                                    @foreach ($editables as $editable)
                                        <option {{$cliente->clie_editable_id == $editable->edi_id ? 'selected' : false}} value="{{ $editable->edi_id }}">{{ $editable->edi_titulo }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <label for="estado">Estado</label>
                        <div class="row mb-3">
                            <div class="form-floating my-3">

                                <select name="estado" id="estado" class="tipo-seleccion">
                                    <option {{ $cliente->clie_estado == 1 ? 'selected' : false }} value="1">Activo
                                    </option>
                                    <option {{ $cliente->clie_estado == 0 ? 'selected' : false }} value="0">Inactivo
                                    </option>
                                </select>
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
    <script src="{{ asset('public/management/js/cliente/editar.js?v=' . rand()) }}"></script>
    <script>
        let ancho = {{ $ancho }}
        let alto = {{ $alto }}
    </script>
@endpush
