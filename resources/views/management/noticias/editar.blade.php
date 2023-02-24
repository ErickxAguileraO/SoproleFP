@extends('layout.management')
@push('extra-css')
    <link rel="stylesheet" type="text/css" href="{{ asset('/public/management/css/checkbox.css') }}">
@endpush

@section('title', 'Editar noticia')

@section('content')
    <div class="formulario-admin-secciones">
        <a href="{{ route('administracion.noticia.index') }}" class="enlace btn btn-primary my-3"><i
                class="bi bi-arrow-bar-left"></i> volver
            al listado</a>
        <div class="row">
            <h1>Editar noticia</h1>
        </div>
        <form name="formSubmit" class="formulario" id="formSubmit" enctype="multipart/form-data" method="post">
            <input type="hidden" name="noticia_id" value="{{ $noticia->not_id }}" />
            @csrf
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <div class="form-floating my-3">
                            <input type="text" name="titulo" class="form-control" id="titulo" placeholder="titulo"
                                autocomplete="new-password" value="{{ $noticia->not_titulo }}" required>
                            <label for="titulo">Título</label>
                        </div>

                        <div class="form-floating my-3">
                            <input type="text" name="titulo2" class="form-control" id="titulo2" placeholder="titulo2"
                                autocomplete="new-password" value="{{ $noticia->not_titulo2 }}" required>
                            <label for="titulo2">Título 2</label>
                        </div>
                        <label for="fecha">Fecha</label>
                        <div class="form-floating my-3">
                            <input type="date" name="fecha" class="form-control" id="fecha" value="{{$noticia->not_fecha}}" required>
                        </div>
                        <div class="form-floating my-3">
                            <textarea id="contenido" class="form-control" name="contenido" rows="4" cols="50" placeholder="Contenido">{{ $noticia->not_contenido }}</textarea>
                        </div>
                        
                        <label for="imagen">Slider ({{ $ancho . 'px ancho x ' . $alto . 'px alto' }})</label>
                        @if ($noticia->not_slider != '')
                            <a target="_blank" href='{{ $noticia->not_slider }} '>Ver
                                imagen adjunta <i class="fas fa-eye"></i></a>
                        @endif
                        <div class="row mb-3">
                            <div class="form-floating my-3">
                                <input type="file" class="input-img-solo" id="imagen" name="imagen">
                            </div>
                        </div>

                        <div>
                            <div class="wp-documentos-right tipo-img-txt">
                                <label for="">Galería</label>
                                <div id="galeria_imagenes">
                                    <div>
                                        <input type="file" name="imagenes[]"
                                            class="input-img-admin validador-medidas-img-dinamicas" accept="image/*">
                                    </div>
                                </div>
                                <div class="flex-btn-file-img">
                                    <div class="btn-file-img" id="agregar-imagenes">Agregar</div>
                                </div>
                            </div>

                            <table id="tabla" class="nowrap table table-hover table-striped bd-l" width="100%"
                                border="0" cellpadding="0" style="text-align: center">
                                <thead>
                                    <tr>
                                        <th scope="col" style="width: 126px;">Imagen</th>
                                        <th scope="col" style="width: 120px;">Ver</th>
                                        <th scope="col" style="width: 86px;">Eliminar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($noticia->imagenes as $imagen)
                                        <tr style="vertical-align: middle;">
                                            <td>
                                                <img src="{{ $imagen->ino_imagen }}" alt=""
                                                    title="Welcome To Pakainfo.com" style="height: 150px;">
                                            </td>
                                            <td>
                                                <a target="_blank" href='{{ $imagen->ino_imagen }}'>
                                                    <i class="fas fa-download"></i>
                                                </a>
                                            </td>
                                            <td>
                                                <a target="_blank" style="color:rgb(178, 16, 16)"
                                                    codigo='{{ $imagen->ino_id }}'>
                                                    <i class="fas fa-trash delete_imagen_cargada"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

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

                            
                            <div>
                                <label for="estado">Estado</label>
                                <div class="row mb-3">
                                    <div class="form-floating my-3">
                                        <select name="estado" id="estado" class="tipo-seleccion">
                                            <option {{ $noticia->not_estado == 1 ? 'selected' : false }} value="1">Activo
                                            </option>
                                            <option {{ $noticia->not_estado == 0 ? 'selected' : false }} value="0">Inactivo</option>
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
    <script src="{{ asset('public/management/js/noticias/editar.js?v=' . rand()) }}"></script>
    <script src="{{ asset('public/management/js/noticias/imagenes.js?v=' . rand()) }}"></script>
    <script>
        let ancho = {{ $ancho }}
        let alto = {{ $alto }}
    </script>
@endpush
