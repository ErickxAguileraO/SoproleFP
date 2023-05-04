@extends('layout.management')

@section('title', 'Crear base legal')
@push('extra-css')
    <link rel="stylesheet" type="text/css" href="{{ asset('/public/management/css/checkbox.css') }}">
@endpush
@section('content')
    <div class="formulario-admin-secciones">

        <a href="{{ route('administracion.bases.legales.index') }}" class="enlace btn btn-primary my-3"><i
                class="bi bi-arrow-bar-left"></i> volver
            al listado</a>
        <div class="row">
            <h1>Bases legales</h1>
        </div>
        <form name="formSubmit" class="formulario" id="formSubmit" enctype="multipart/form-data" method="post">
            @csrf
            <input type="hidden" name="base_id" value="{{ $documento->dbs_id }}" />
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">

                        <label for="nombre">Nombre</label>
                        <div class="form-floating my-3">
                            <input type="text" name="nombre" class="form-control" id="nombre" placeholder="nombre"
                                autocomplete="new-password" value="{{ $documento->dbs_nombre }}" required>
                        </div>

                        <label for="nombre">Orden</label>
                        <div class="form-floating my-3">
                            <input type="text" name="orden" class="form-control" value="{{ $documento->dbs_orden }}"
                                required>
                        </div>

                        <label for="imagen">Archivo (PDF)</label>

                        @if ($documento->dbs_archivo != '')
                            <a target="_blank" href='{{ $documento->dbs_archivo }} '>Ver base legal <i
                                    class="fas fa-eye"></i></a>
                        @endif


                        <div class="row mb-3">
                            <div class="form-floating my-3">
                                <input type="file" class="input-img-solo" id="archivo" name="archivo" accept=".pdf">
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
    <script src="{{ asset('public/management/js/bases_legales/editar.js?v=' . rand()) }}"></script>
@endpush
