@extends('layout.management')

@section('title', 'Editar editable')

@section('content')
    <div class="formulario-admin-secciones">
        <a href="{{ route('administracion.editable.index') }}" class="enlace btn btn-primary my-3"><i
                class="bi bi-arrow-bar-left"></i> volver
            al listado</a>
        <div class="row">
            <h1>Editar editable</h1>
        </div>
        <form name="formSubmit" class="formulario" id="formSubmit" enctype="multipart/form-data" method="post">
            <input type="hidden" name="editable_id" value="{{ $editable->edi_id }}" />
            @csrf
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="titulo">Título</label>
                        <div class="form-floating my-3">
                            <input type="text" name="titulo" class="form-control" id="titulo" placeholder="titulo"
                                autocomplete="new-password" value="{{ $editable->edi_titulo }}" required>

                        </div>
                        <label for="contenido">Contenido</label>
                        <div class="form-floating my-3">
                            <textarea id="contenido" class="form-control" name="contenido" rows="4" cols="50">{{ $editable->edi_contenido }}</textarea>
                        </div>
                        <label for="video">Video</label>
                        <div class="form-floating my-3">
                            <input type="text" name="video" class="form-control" id="video" placeholder="video"
                                autocomplete="new-password" value="{{ $editable->edi_video }}" required>

                        </div>
                        <label for="tipo" class="col-md-4 col-form-label">Tipo</label>
                        <div class="row mb-3">
                            <div class="form-floating my-3">
                                <select name="tipo" id="tipo" class="tipo-seleccion">
                                    <option {{ $editable->edi_tipo == 1 ? 'selected' : false }} value="1">Etiam
                                        tincidunt non ante</option>
                                    <option {{ $editable->edi_tipo == 2 ? 'selected' : false }} value="2">Ut mauris
                                        sapien</option>
                                    <option {{ $editable->edi_tipo == 3 ? 'selected' : false }} value="3">Aliquet quis
                                        fringilla ut</option>
                                    <option {{ $editable->edi_tipo == 4 ? 'selected' : false }} value="4">Tincidunt vel
                                        erat</option>
                                </select>
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
                                    @foreach ($editable->imagenes as $imagen)
                                        <tr style="vertical-align: middle;">
                                            <td>
                                                <img src="{{ $imagen->ied_imagen }}" alt=""
                                                    title="Welcome To Pakainfo.com" style="height: 150px;">
                                            </td>
                                            <td>
                                                <a target="_blank" href='{{ $imagen->ied_imagen }}'>
                                                    <i class="fas fa-download"></i>
                                                </a>
                                            </td>
                                            <td>
                                                <a target="_blank" style="color:rgb(178, 16, 16)"
                                                    codigo='{{ $imagen->ied_id }}'>
                                                    <i class="fas fa-trash delete_imagen_cargada"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div>

                                <label for="estado">Estado</label>
                                <div class="row mb-3">
                                    <div class="form-floating my-3">

                                        <select name="estado" id="estado" class="tipo-seleccion">
                                            <option {{ $editable->edi_estado == 1 ? 'selected' : false }} value="1">
                                                Activo
                                            </option>
                                            <option {{ $editable->edi_estado == 0 ? 'selected' : false }} value="0">
                                                Inactivo</option>
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
    <script src="{{ asset('public/management/js/editable/editar.js?v=' . rand()) }}"></script>
    <script src="{{ asset('public/management/js/editable/imagenes.js?v=' . rand()) }}"></script>
@endpush
