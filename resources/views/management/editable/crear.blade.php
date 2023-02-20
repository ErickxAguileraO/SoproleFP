@extends('layout.management')

@section('title', 'Crear editable')

@section('content')
    <div class="formulario-admin-secciones">
        <a href="{{ route('administracion.editable.index') }}" class="enlace btn btn-primary my-3"><i
                class="bi bi-arrow-bar-left"></i> volver
            al listado</a>
        <div class="row">
            <h1>Crear editable</h1>
        </div>
        <form name="formSubmit" class="formulario" id="formSubmit" enctype="multipart/form-data" method="post">
            @csrf
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="titulo">Título</label>
                        <div class="form-floating my-3">
                            <input type="text" name="titulo" class="form-control" id="titulo" value="" required>
                        </div>
                        <label for="titulo">Contenido</label>
                        <div class="form-floating my-3">
                            <textarea id="contenido" class="form-control" name="contenido" rows="4" cols="50"></textarea>
                        </div>
                        <label for="video">Video</label>
                        <div class="form-floating my-3">
                            <input type="text" name="video" class="form-control" id="video"
                                autocomplete="new-password" value="" required>
                        </div>
                        <label for="tipo">Tipo</label>
                        <div class="row mb-3">
                            <div class="form-floating my-3">
                                <select name="tipo" id="tipo" class="tipo-seleccion">
                                    <option value="1">Conócenos</option>
                                    <option value="2">Políticas de privacidad</option>
                                    <option value="3">Términos y condiciones</option>
                                    <option value="4">Información al consumidor</option>
                                    <option value="5">Modal</option>
                                </select>
                            </div>
                        </div>
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

                        <label for="estado">Estado</label>
                        <div class="row mb-3">
                            <div class="form-floating my-3">
                                <select name="estado" id="estado" class="tipo-seleccion">
                                    <option value="1">Activo</option>
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
    <script src="{{ asset('public/management/js/editable/crear.js?v=' . rand()) }}"></script>
    <script src="{{ asset('public/management/js/editable/imagenes.js?v=' . rand()) }}"></script>
@endpush
