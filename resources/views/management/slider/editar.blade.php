@extends('layout.management')

@section('title', 'Editar slider')
@push('extra-css')
    <link rel="stylesheet" type="text/css" href="{{ asset('/public/management/css/checkbox.css') }}">
@endpush
@section('content')
    <div class="formulario-admin-secciones">
        <a href="{{ route('administracion.slider.index') }}" class="enlace btn btn-primary my-3"><i
                class="bi bi-arrow-bar-left"></i> volver
            al listado</a>
        <div class="row">
            <h1>Editar slider</h1>
        </div>
        <form name="formSubmit" class="formulario" id="formSubmit" enctype="multipart/form-data" method="post">
            @csrf
            <input type="hidden" name="slider_id" value="{{ $slider->sli_id }}" />
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <div class="form-floating my-3">
                            <input type="text" name="nombre" class="form-control" id="pro_nombre"
                                placeholder="pro_nombre" autocomplete="new-password" value="{{ $slider->sli_nombre }}"
                                required>

                        </div>

                        <label for="nombre">Enlace</label>
                        <div class="form-floating my-3">
                            <input type="text" name="enlace" class="form-control"  value="{{$slider->sli_link}}" required>
                            
                        </div>

                        <label for="imagen">Imagen ({{ $ancho . 'px ancho x ' . $alto . 'px alto' }})</label>
                        @if ($slider->sli_imagen != '')
                            <a target="_blank" href='{{ $slider->sli_imagen }} '>Ver
                                imagen adjunta <i class="fas fa-eye"></i></a>
                        @endif
                        <div class="row mb-3">
                            <div class="form-floating my-3">
                                <input type="file" class="input-img-solo" id="imagen" name="imagen">
                            </div>
                        </div>


                        <label for="imagen">Imagen movil ({{ $anchoMovil ."px ancho x ".$altoMovil."px alto"}})</label>
                        @if ($slider->sli_imagen_movil != '')
                            <a target="_blank" href='{{ $slider->sli_imagen_movil }} '>Ver
                                imagen adjunta <i class="fas fa-eye"></i></a>
                        @endif
                        <div class="row mb-3">
                            <div class="form-floating my-3">
                                <input type="file" class="input-img-solo" id="imagen_movil" name="imagen_movil">
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


                        <label for="orden">Orden</label>
                        <div class="form-floating my-3">
                            <input type="text" name="orden" class="form-control" id="orden" placeholder="orden"
                                autocomplete="new-password" value="{{$slider->sli_orden}}" required
                                oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');">
                        </div>


                        <label for="estado">Estado</label>
                        <div class="row mb-3">
                            <div class="form-floating my-3">

                                <select name="estado" id="estado" class="tipo-seleccion">
                                    <option {{ $slider->sli_estado == 1 ? 'selected' : false }} value="1">Activo
                                    </option>
                                    <option {{ $slider->sli_estado == 0 ? 'selected' : false }} value="0">Inactivo</option>
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
    <script src="{{ asset('public/management/js/slider/editar.js?v=' . rand()) }}"></script>
    <script>
        let ancho = {{ $ancho }}
        let alto = {{ $alto }}
        let anchoMovil = {{ $anchoMovil }}
        let altoMovil = {{ $altoMovil }}
    </script>
@endpush
