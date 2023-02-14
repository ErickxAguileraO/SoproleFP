@extends('layout.management')

@push('extra-css')
    <link rel="stylesheet" type="text/css" href="{{ asset('/public/management/css/checkbox.css') }}">
@endpush


@section('title', 'Crear academia')

@section('content')
    <div class="formulario-admin-secciones">
        <a href="{{ route('administracion.academia.index') }}" class="enlace btn btn-primary my-3"><i
                class="bi bi-arrow-bar-left"></i> volver
            al listado</a>
        <div class="row">
            <h1>Crear academia</h1>
        </div>
        <form name="formSubmit" class="formulario" id="formSubmit" enctype="multipart/form-data" method="post">
            @csrf
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="titulo">Título</label>
                        <div class="form-floating my-3">
                            <input type="text" name="titulo" class="form-control" id="titulo" value=""
                                required>
                        </div>
                        <label for="titulo">Título 2</label>
                        <div class="form-floating my-3">
                            <input type="text" name="titulo2" class="form-control" id="titulo2" value=""
                                required>
                        </div>

                        <label for="">Contenido</label>
                        <div class="form-floating my-3">
                            <textarea id="contenido" class="form-control" name="contenido" rows="4" cols="50"></textarea>
                        </div>

                        <label for="video">Video</label>
                        <div class="form-floating my-3">
                            <input type="text" name="video" class="form-control" id="video"
                                autocomplete="new-password" value="" required>
                        </div>

                        <label for="orden">Segmentos</label>
                        <div style="margin-top: 15px;">
                            @foreach ($segmentos as $segmento)
                                <label class="containerCheckbox">{{ $segmento->seg_nombre }}
                                    <input type="checkbox" name="segmentos[]" value="{{ $segmento->seg_id }}">
                                    <span class="checkmark"></span>
                                </label>
                            @endforeach
                        </div>
                        <br />


                        <label for="orden">Sub-Segmentos</label>
                        <div style="margin-top: 15px;">
                            @foreach ($subsegmentos as $subsegmento)
                                <label class="containerCheckbox">{{ $subsegmento->sse_nombre }}
                                    <input type="checkbox" name="subsegmentos[]" value="{{ $subsegmento->sse_id }}">
                                    <span class="checkmark"></span>
                                </label>
                            @endforeach
                        </div>
                        <br />

                        <label for="orden">Orden</label>
                        <div class="form-floating my-3">
                            <input type="text" name="orden" class="form-control" id="orden" placeholder="orden"
                                autocomplete="new-password" value="" required
                                oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');">
                        </div>


                        <label for="estado">Estado</label>
                        <div class="row mb-3">
                            <div class="form-floating my-3">
                                <select name="estado" id="estado" class="tipo-seleccion">
                                    <option value="1">Activo
                                    </option>
                                    <option value="0">Inactivo</option>
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
    <script src="{{ asset('public/management/js/academia/crear.js?v=' . rand()) }}"></script>
    <script src="{{ asset('public/management/js/academia/imagenes.js?v=' . rand()) }}"></script>
@endpush
