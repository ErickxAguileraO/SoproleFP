@extends('layout.management')

@section('title', 'Crear slider')

@section('content')
    <div class="formulario-admin-secciones">
        <a href="{{ route('administracion.noticia.index') }}" class="enlace btn btn-primary my-3"><i
                class="bi bi-arrow-bar-left"></i> volver
            al listado</a>
        <div class="row">
            <h1>Crear</h1>
        </div>
        <form name="formSubmit" class="formulario" id="formSubmit" enctype="multipart/form-data" method="post">
            @csrf
            <div class="row">
                <div class="col-sm-4">
                    <div class="form-group">
                        <label for="titulo">Título</label>
                        <div class="form-floating my-3">
                            <input type="text" name="titulo" class="form-control" id="titulo"  value="" required>
                        </div>
                        <label for="titulo2">Título 2</label>
                        <div class="form-floating my-3">
                            <input type="text" name="titulo2" class="form-control" id="titulo2" value="" required>
                        </div>

                        <label for="fecha">Fecha</label>
                        <div class="form-floating my-3">
                            <input type="date" name="fecha" class="form-control" id="fecha" value="" required>
                        </div>

                        <label for="">Contenido</label>
                        <div class="form-floating my-3">
                            <textarea id="contenido" class="form-control" name="contenido" rows="4" cols="50"></textarea>
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
                                    <option  value="1">Activo
                                    </option>
                                    <option  value="0">Inactivo</option>
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
    <script src="{{ asset('public/management/js/noticias/crear.js?v=' . rand()) }}"></script>
    <script src="{{ asset('public/management/js/noticias/imagenes.js?v=' . rand()) }}"></script>
@endpush
