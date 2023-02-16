@extends('layout.management')


@push('extra-css')
    <link rel="stylesheet" type="text/css" href="{{ asset('/public/management/css/checkbox.css') }}">
@endpush

@section('title', 'Editar segmento')

@section('content')
    <div class="formulario-admin-secciones">
        <a href="{{ route('administracion.segmento.index') }}" class="enlace btn btn-primary my-3"><i
                class="bi bi-arrow-bar-left"></i> volver
            al listado</a>
        <div class="row">
            <h1>Editar segmento</h1>
        </div>
        <form name="formSubmit" class="formulario" id="formSubmit" enctype="multipart/form-data" method="post">
            @csrf
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <input type="hidden" name="segmento_id" value="{{ $segmento->seg_id }}" />
                        <label for="nombre">Nombre</label>
                        <div class="form-floating my-3">
                            <input type="text" name="nombre" class="form-control" id="nombre" placeholder="nombre"
                                autocomplete="new-password" value="{{ $segmento->seg_nombre }}" required>
                        </div>

                        <label for="imagen">Imagen ({{ $ancho . 'px ancho x ' . $alto . 'px alto' }})</label>
                        @if ($segmento->seg_imagen != '')
                            <a target="_blank" href='{{ $segmento->seg_imagen }} '>Ver
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

                        <label for="color">Color</label>
                        <div class="form-floating my-3">
                            <div id="picker"></div>
                            <input type="hidden" name="color" class="form-control" id="color" placeholder="nombre"
                                value="{{ $segmento->seg_color }}" required>
                        </div>
                        <a class="btn btn-success btn-reset-color" id="btn-reset-color">Setear color anterior</a><br/><br/>
                    

                        <label for="color">Color texto</label>
                        <div class="form-floating my-3">
                            <div id="picker_texto"></div>
                            <input type="hidden" name="color_texto" class="form-control" id="color_texto" placeholder="nombre"
                                value="{{ $segmento->seg_color_texto }}" required>
                        </div>



                        <label for="orden">Orden</label>
                        <div class="form-floating my-3">
                            <input type="text" name="orden" class="form-control" id="orden" placeholder="orden"
                                autocomplete="new-password" value="{{ $segmento->seg_orden }}" required
                                oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');">
                        </div>
                        <label for="orden">Sub-Segmentos</label>
                        <div style="margin-top: 15px;">
                            @foreach ($subsegmentos as $subsegmento)
                                <label class="containerCheckbox">{{ $subsegmento->sse_nombre }}
                                    <input
                                        {{ in_array($subsegmento->sse_id, $subsegmentosSeleccionados) ? 'checked' : false }}
                                        type="checkbox" name="subsegmentos[]" value="{{ $subsegmento->sse_id }}">
                                    <span class="checkmark"></span>
                                </label>
                            @endforeach
                        </div>
                        <br />
                        <label for="estado">Estado</label>
                        <div class="row mb-3">
                            <div class="form-floating my-3">

                                <select name="estado" id="estado" class="tipo-seleccion">
                                    <option {{ $segmento->seg_estado == 1 ? 'selected' : false }} value="1">Activo
                                    </option>
                                    <option {{ $segmento->seg_estado == 0 ? 'selected' : false }} value="0">Inactivo
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
    <script src="https://cdn.jsdelivr.net/npm/@jaames/iro@5"></script>
    <script src="{{ asset('public/management/js/segmento/editar.js?v=' . rand()) }}"></script>
    <script>
        let ancho = {{ $ancho }}
        let alto = {{ $alto }}
        let color = "{{ $segmento->seg_color }}";
        let color_texto = "{{ $segmento->seg_color_texto }}";
        let colorAnterior = "{{ $segmento->seg_color_anterior }}";
    </script>
@endpush
